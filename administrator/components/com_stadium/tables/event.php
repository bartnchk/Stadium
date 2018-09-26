<?php

defined('_JEXEC') or exit();

class StadiumTableEvent extends JTable {

	public function __construct(&$db) {
		parent::__construct('#__z_stadium_events', 'id', $db);
	}
}