<?php

defined('_JEXEC') or exit();

class TouristsTablePoint extends JTable
{
	public function __construct(&$db)
    {
		parent::__construct('#__z_tourists_points', 'id', $db);
	}
}
