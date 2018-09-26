<?php

defined('_JEXEC') or exit();

class TouristsModelSettings extends JModelAdmin
{
    public function getForm($data = array(), $loadData = true)
    {
        $form = $this->loadForm('com_tourists.settings','settings',
            array('control' => 'jform','load_data' => $loadData)
        );

        if (empty($form))
            return false;

        return $form;
    }

    public function getTable($type = 'Settings', $prefix = 'TouristsTable', $config = array())
    {
        return JTable::getInstance($type, $prefix, $config);
    }

    public function save($data)
    {
        $achievements = [];
        $this->clearData();

        if($data['achievements'])
        {
            foreach ($data['achievements'] as $ach)
            {
                if( trim($ach['achievement']) != '' )
                    $achievements[] = $ach['achievement'];
            }
        }

        $achievements_json = json_encode($achievements,JSON_UNESCAPED_UNICODE);

        $query = $this->_db->getQuery(true);
        $query->insert('#__z_tourists_settings');

        if( !empty($achievements) )
            $query->set( 'achievements = ' . $this->_db->quote($achievements_json) );

        if( $data['title'] )
            $query->set( 'title = ' . $this->_db->quote($data['title']) );

        if( $data['site'] )
            $query->set( 'description = ' . $this->_db->quote($data['description']) );

        if( $data['site'] )
            $query->set( 'site = ' . $this->_db->quote($data['site']) );

        if( $data['address'] )
            $query->set( 'address = ' . $this->_db->quote($data['address']) );

        if( $data['facebook'] )
            $query->set( 'facebook = ' . $this->_db->quote($data['facebook']) );

        if( $data['twitter'] )
            $query->set( 'twitter = ' . $this->_db->quote($data['twitter']) );

        if( $data['instagram'] )
            $query->set( 'instagram = ' . $this->_db->quote($data['instagram']) );

        $this->_db->setQuery($query);
        $this->_db->execute();

        $app = JFactory::getApplication();

        $app->enqueueMessage('Настройки успешно сохранены', 'message');
        $app->redirect('administrator/index.php?option=com_tourists&view=settings&layout=edit');
    }

    protected function clearData()
    {
        $query = $this->_db->getQuery(true);
        $query->delete('#__z_tourists_settings');

        $this->_db->setQuery($query);
        $this->_db->execute();
    }

    private function getSettings()
    {
        $query = $this->_db->getQuery(true);
        $query->select('*');
        $query->from('#__z_tourists_settings');
        $this->_db->setQuery($query);
        $settings = $this->_db->loadAssoc();

        $achievements = json_decode($settings['achievements']);
        $settings['achievements'] = array();

        foreach ($achievements as $key => $item)
            $settings['achievements']['achievement' . $key]['achievement'] = $item;

        return $settings;
    }

    protected function loadFormData()
    {
        return $this->getSettings();
    }
}