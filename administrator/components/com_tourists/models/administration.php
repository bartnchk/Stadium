<?php

defined('_JEXEC') or exit();

class TouristsModelAdministration extends JModelAdmin
{
    public function getForm($data = array(), $loadData = true)
    {
        $form = $this->loadForm('com_tourists.administration','administration',
            array('control' => 'jform','load_data' => $loadData)
        );

        if (empty($form))
            return false;

        return $form;
    }

    public function getTable($type = 'Administration', $prefix = 'TouristsTable', $config = array())
    {
        return JTable::getInstance($type, $prefix, $config);
    }


    protected function clearData()
    {
        $query = $this->_db->getQuery(true);
        $query->delete('#__z_tourists_administration');

        $this->_db->setQuery($query);
        $this->_db->execute();
    }

    public function save($data)
    {
        $this->clearData();

        foreach ($data['administration'] as $admin)
        {
            if( $this->valid($admin) )
            {
                $query = $this->_db->getQuery(true);

                $query->insert('#__z_tourists_administration');

                if ($admin['title'])
                    $query->set('title = ' . $this->_db->quote($admin['title']));

                if ($admin['name'])
                    $query->set('name = ' . $this->_db->quote($admin['name']));

                $this->_db->setQuery($query);
                $this->_db->execute();
            }
        }

        $app = JFactory::getApplication();

        $app->enqueueMessage('Данные успешно сохранены', 'message');
        $app->redirect('administrator/index.php?option=com_tourists&view=administration&layout=edit');
    }

    private function valid($data)
    {
        if( trim($data['title']) != '' && trim($data['name']) != '' )
            return true;

        return false;
    }


    private function getAdmins()
    {
        $data = [];

        $query = $this->_db->getQuery(true);
        $query->select('*');
        $query->from('#__z_tourists_administration');
        $this->_db->setQuery($query);
        $contacts = $this->_db->loadObjectList();

        foreach ($contacts as $key => $contact)
        {

            $data['administration' . $key] = $contact;
        }

        return ['administration' => $data];
    }


    protected function loadFormData()
    {
        return $this->getAdmins();
    }
}