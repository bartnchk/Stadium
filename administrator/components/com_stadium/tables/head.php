<?php

defined('_JEXEC') or exit();

class StadiumTableHead extends JTable {

	public function __construct(&$db) {
		parent::__construct('#__z_stadium_heads', 'id', $db);
	}
}