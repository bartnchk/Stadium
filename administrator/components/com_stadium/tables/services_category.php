<?php

defined('_JEXEC') or exit();

class StadiumTableServices_category extends JTable {

	public function __construct(&$db) {
		parent::__construct('#__z_stadium_services_categories', 'id', $db);
	}
}