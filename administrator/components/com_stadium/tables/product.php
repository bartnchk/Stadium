<?php

defined('_JEXEC') or exit();

class StadiumTableProduct extends JTable {

	public function __construct(&$db) {
		parent::__construct('#__z_stadium_products', 'id', $db);
	}
}