<?php

defined('_JEXEC') or exit();

class StadiumTableHistorypoint extends JTable {

	public function __construct(&$db) {
		parent::__construct('#__z_stadium_history', 'id', $db);
	}
}