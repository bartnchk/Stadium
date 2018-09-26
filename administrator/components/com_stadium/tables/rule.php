<?php

defined('_JEXEC') or exit();

class StadiumTableRule extends JTable {

	public function __construct(&$db) {
		parent::__construct('#__z_stadium_rules', 'id', $db);
	}
}