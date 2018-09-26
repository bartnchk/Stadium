<?php

defined('_JEXEC') or exit();

class TouristsTableContacts extends JTable
{
	public function __construct(&$db)
    {
		parent::__construct('#__z_tourists_contacts', 'id', $db);
	}
}
