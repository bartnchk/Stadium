<?php

defined('_JEXEC') or exit();

class StadiumTableMediaitem extends JTable {

	public function __construct(&$db)
    {
		parent::__construct('#__z_stadium_media', 'id', $db);
	}
}