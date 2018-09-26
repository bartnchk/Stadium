<?php

defined('_JEXEC') or exit();

class TouristsTablePhotos extends JTable
{
	public function __construct(&$db)
    {
		parent::__construct('#__z_tourists_photos', 'id', $db);
	}
}
