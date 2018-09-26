<?php

defined('_JEXEC') or exit();

class TouristsTableAttraction extends JTable
{
	public function __construct(&$db)
    {
		parent::__construct('#__z_tourists_attractions', 'id', $db);
	}
}
