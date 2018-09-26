<?php

defined('_JEXEC') or exit();

class StadiumTableInstagramitem extends JTable {

	public function __construct(&$db) {
		parent::__construct('#__z_stadium_instagram', 'id', $db);
	}
}