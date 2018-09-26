<?php

defined('_JEXEC') or exit();

class StadiumTableService extends JTable {

	public function __construct(&$db) {
		parent::__construct('#__z_stadium_services', 'id', $db);
	}
}