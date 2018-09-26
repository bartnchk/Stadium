<?php

defined('_JEXEC') or exit();

class TouristsModelRules extends JModelAdmin
{
    public function getForm($data = array(), $loadData = true)
    {
        $form = $this->loadForm('com_tourists.rules', 'rules',
            array('control' => 'jform', 'load_data' => $loadData)
        );

        if (empty($form))
            return false;

        return $form;
    }

    public function getTable($type = 'Rules', $prefix = 'TouristsTable', $config = array())
    {
        return JTable::getInstance($type, $prefix, $config);
    }

    public function save($data)
    {
        $query = $this->_db->getQuery(true);
        $query->update('#__z_tourists_data');
        $query->set('val = ' . $this->_db->quote($data['rules']));
        $query->where($this->_db->quoteName('key') . ' = ' . $this->_db->quote('rules'));
        $this->_db->setQuery($query);
        $this->_db->execute();

        $app = JFactory::getApplication();
        $app->enqueueMessage('Правила успешно сохранены', 'message');
        $app->redirect('administrator/index.php?option=com_tourists&view=rules');
    }

    public function loadFormData()
    {
        return [
            'rules' => $this->getRules()
        ];
    }

    public function getRules()
    {
        $query = $this->_db->getQuery(true);
        $query->select('val');
        $query->from('#__z_tourists_data');
        $query->where($this->_db->quoteName('key') . ' = ' . $this->_db->quote('rules'));
        $this->_db->setQuery($query);

        return $this->_db->loadResult();
    }
}
