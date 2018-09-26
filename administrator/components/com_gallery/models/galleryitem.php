<?php

defined('_JEXEC') or exit();

class GalleryModelGalleryitem extends JModelAdmin 
{
    public function getForm($data = array(), $loadData = true) {

		$form = $this->loadForm(
			'com_gallery.galleryitem',
			'galleryitem',
			array(
				'control' => 'jform',
				'load_data' => $loadData
				)
			);
		if (empty($form))
			return false;
		else
			return $form;
	}

	public function getTable($type = 'Galleryitem', $prefix = 'GalleryTable', $config = array()) 
	{
		return JTable::getInstance($type, $prefix, $config);
	}

	public function delete (&$pks) 
	{
		parent::delete($pks);
    }

    protected function loadFormData()
    {
        $data = $this->getItem();

        if($data->id)
        {
            $this->_db->setQuery('SELECT * FROM #__z_stadium_gallery_images WHERE id_gallery = ' .$data->id);
            $images = $this->_db->loadAssocList();
            $data->set('img', $images);
        }

        return $data;
    }

	public function prepareTable($table)
	{
        $input = JFactory::getApplication()->input;
        $images = $input->files->get('pics');

        foreach ($images as $image)
        {
            if ($image['tmp_name'])
            {
                $img = new JImage($image['tmp_name']);

                if($img->getWidth() > 400)
                {
                    $img = $img->Resize(400,'',false); 
                }

                $filename = 'icon_' .uniqid(). '.jpg';

                $path = JPATH_SITE . '/images/gallery/' . $table->id;

                if(!JFolder::exists($path))
                {
                    JFolder::create($path);
                }

                $path .= '/' . $filename;

                $img->toFile($path, 2);

                $this->_db->setQuery("INSERT INTO #__z_stadium_gallery_images VALUES ('','" .$filename. "', $table->id)");
                $this->_db->execute();
            }
        }
    }

    public function deletepic($id_gallery, $id_pic)
    {
        $path = JPATH_SITE . '/images/gallery/' .$id_gallery. '/';

        $this->_db->setQuery("SELECT file FROM #__z_stadium_gallery_images WHERE id = " . $id_pic);
        $image = $this->_db->loadResult();

        jimport('joomla.filesystem.file');
        JFile::delete($path . $image);

        $this->_db->setQuery("DELETE FROM #__z_stadium_gallery_images WHERE id = " . $id_pic);
        $this->_db->execute();
    }
}