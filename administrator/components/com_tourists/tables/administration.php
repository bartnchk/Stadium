<?php

defined('_JEXEC') or exit();

class TouristsTableAdministration extends JTable
{
	public function __construct(&$db)
    {
		parent::__construct('#__z_tourists_administration', 'id', $db);
	}
}
