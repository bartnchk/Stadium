<?php

defined('_JEXEC') or exit();

class TouristsTableRules extends JTable
{
	public function __construct(&$db)
    {
		parent::__construct('#__z_tourists_data', 'id', $db);
	}
}
