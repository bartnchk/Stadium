<?php

defined('_JEXEC') or exit();

class TouristsTableHotel extends JTable
{
	public function __construct(&$db)
    {
		parent::__construct('#__z_tourists_hotels', 'id', $db);
	}
}
