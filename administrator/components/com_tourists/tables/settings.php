<?php

defined('_JEXEC') or exit();

class TouristsTableSettings extends JTable
{
	public function __construct(&$db)
    {
		parent::__construct('#__z_tourists_settings', 'id', $db);
	}
}
