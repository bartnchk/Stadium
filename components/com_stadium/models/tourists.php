<?php

defined('_JEXEC') or die;

class StadiumModelTourists extends JModelList
{
    public function getContacts()
    {
        $query = $this->_db->getQuery(true);
        $query->select('*');
        $query->from('#__z_tourists_contacts');
        $this->_db->setQuery($query);

        return $this->_db->loadObjectList();
    }

    public function getAdministration()
    {
        $query = $this->_db->getQuery(true);
        $query->select('*');
        $query->from('#__z_tourists_administration');
        $this->_db->setQuery($query);

        return $this->_db->loadObjectList();
    }

    public function getPresentation()
    {
        $query = $this->_db->getQuery(true);
        $query->select('*');
        $query->from('#__z_tourists_settings');
        $this->_db->setQuery($query);

        return $this->_db->loadObject();
    }

    public function getPhotos()
    {
        $query = $this->_db->getQuery(true);
        $query->select('*');
        $query->from('#__z_tourists_photos');
        $this->_db->setQuery($query);

        return $this->_db->loadObjectList();
    }

    public function getMap()
    {
        $query = $this->_db->getQuery(true);
        $query->select('val');
        $query->from('#__z_tourists_data');
        $query->where($this->_db->quoteName('key') . ' = ' . $this->_db->quote('map'));
        $this->_db->setQuery($query);

        return $this->_db->loadObject();
    }

    public function getRules()
    {
        $query = $this->_db->getQuery(true);
        $query->select('*');
        $query->from('#__z_tourists_data');
        $query->where($this->_db->quoteName('key') . ' = ' . $this->_db->quote('rules'));
        $this->_db->setQuery($query);

        return $this->_db->loadObject();
    }

    public function getPoints()
    {
        $query = $this->_db->getQuery(true);
        $query->select('*');
        $query->from('#__z_tourists_points');
        $this->_db->setQuery($query);

        return $this->_db->loadObjectList();
    }

    public function getHotels()
    {
        $query = $this->_db->getQuery(true);
        $query->select('*');
        $query->from('#__z_tourists_hotels');
        $this->_db->setQuery($query);

        return $this->_db->loadObjectList();
    }

    public function getSights()
    {
        $query = $this->_db->getQuery(true);
        $query->select('*');
        $query->from('#__z_tourists_attractions');
        $this->_db->setQuery($query);

        return $this->_db->loadObjectList();
    }
}