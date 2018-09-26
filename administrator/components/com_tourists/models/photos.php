<?php

defined('_JEXEC') or exit();

class TouristsModelPhotos extends JModelAdmin
{
    public function getForm($data = array(), $loadData = true)
    {
        $form = $this->loadForm('com_tourists.photos','photos',
            array('control' => 'jform','load_data' => $loadData)
        );

        if (empty($form))
            return false;

        return $form;
    }

    public function getTable($type = 'Photos', $prefix = 'TouristsTable', $config = array())
    {
        return JTable::getInstance($type, $prefix, $config);
    }

    public function getPhotos()
    {
        $query = $this->_db->getQuery(true);
        $query->select('src');
        $query->from('#__z_tourists_photos');
        $this->_db->setQuery($query);

        return $this->_db->loadObjectList();
    }

    public function save($data)
    {

        $input = JFactory::getApplication()->input;
        $photos = $input->files->get('photos', array(), 'array');

        if($data['map'])
            $this->saveMap( $data['map'] );

        if( $photos[0]['size'] )
        {
            $this->savePhotos($photos);
        }

        $app = JFactory::getApplication();
        $app->enqueueMessage('Фотографии успешно сохранены', 'message');
        $app->redirect('/administrator/index.php?option=com_tourists&view=photos&layout=edit');

    }

    private function savePhotos($photos)
    {
        foreach ($photos as $photo)
        {
            $info = new \SplFileInfo($photo['name']);
            $hash = uniqid(time(), true);
            $filename = "{$hash}." . $info->getExtension();
            $path = JPATH_SITE . '/images/landing/' . $filename;

            $image = new JImage($photo['tmp_name']);
            $resized = $image->cropResize('300', '300', false);
            $resized->toFile($path, IMG_PNG);

            $this->saveToDatabase($filename);
        }
    }

    /**
     * PHOTOS
     * @param $filename
     * save pictures filename to db
     */
    private function saveToDatabase($filename)
    {
        $query = $this->_db->getQuery(true);
        $query->insert('#__z_tourists_photos');
        $query->set( 'src = ' . $this->_db->quote($filename) );
        $this->_db->setQuery($query);
        $this->_db->execute();
    }

    private function saveMap($filename)
    {
        $query = $this->_db->getQuery(true);
        $query->update('#__z_tourists_data');
        $query->set('val = ' . $this->_db->quote($filename));
        $query->where($this->_db->quoteName('key') . ' = ' . $this->_db->quote('map'));
        $this->_db->setQuery($query);
        $this->_db->execute();
    }

    public function getMap()
    {
        $query = $this->_db->getQuery(true);
        $query->select('val');
        $query->from('#__z_tourists_data');
        $query->where($this->_db->quoteName('key') . ' = ' . $this->_db->quote('map'));

        return $this->_db->setQuery($query)->loadResult();
    }

    public function loadFormData()
    {
        return [ 'map' => $this->getMap() ];
    }

    public function deletePhoto($src)
    {
        $query = $this->_db->getQuery(true);
        $query->delete('#__z_tourists_photos');
        $query->where( 'src = ' . $this->_db->quote($src) );

        $this->_db->setQuery($query);

        if( $this->_db->execute() )
        {
            jimport('joomla.filesystem.file');
            JFile::delete(JPATH_ROOT.'/images/landing/' . $src);
        }
    }

}