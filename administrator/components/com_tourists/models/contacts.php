<?php

defined('_JEXEC') or exit();

class TouristsModelContacts extends JModelAdmin
{
    public function getForm($data = array(), $loadData = true)
    {
        $form = $this->loadForm('com_tourists.contacts','contacts',
            array('control' => 'jform','load_data' => $loadData)
        );

        if (empty($form))
            return false;

        return $form;
    }

    public function getTable($type = 'Contacts', $prefix = 'TouristsTable', $config = array())
    {
        return JTable::getInstance($type, $prefix, $config);
    }


    protected function clearData()
    {
        $query = $this->_db->getQuery(true);
        $query->delete('#__z_tourists_contacts');

        $this->_db->setQuery($query);
        $this->_db->execute();
    }

    public function save($data)
    {
        $this->clearData();


        foreach ($data['contacts'] as $contact)
        {
            if( $this->valid($contact) )
            {
                $query = $this->_db->getQuery(true);

                $query->insert('#__z_tourists_contacts');

                if ($contact['title'])
                    $query->set('title = ' . $this->_db->quote($contact['title']));

                if ($contact['name'])
                    $query->set('name = ' . $this->_db->quote($contact['name']));

                if ($contact['phone'])
                    $query->set('phone = ' . $this->_db->quote($contact['phone']));

                if ($contact['email'])
                    $query->set('email = ' . $this->_db->quote($contact['email']));


                $this->_db->setQuery($query);
                $this->_db->execute();
            }
        }

        $app = JFactory::getApplication();

        $app->enqueueMessage('Контакты успешно сохранены', 'message');
        $app->redirect('administrator/index.php?option=com_tourists&view=contacts&layout=edit');
    }

    private function valid($data)
    {
        if( trim($data['title']) != '' &&
            trim($data['name']) != '' &&
            ( trim($data['phone']) != '' || trim($data['email']) != '' )
        ) return true;

        return false;
    }


    private function getContacts()
    {
        $data = [];

        $query = $this->_db->getQuery(true);
        $query->select('*');
        $query->from('#__z_tourists_contacts');
        $this->_db->setQuery($query);
        $contacts = $this->_db->loadObjectList();

        foreach ($contacts as $key => $contact)
        {

            $data['contact' . $key] = $contact;
        }

        return ['contacts' => $data];
    }


    protected function loadFormData()
    {
        return $this->getContacts();
    }
}