<?php

defined('_JEXEC') or exit();

class StadiumTableOnenews extends JTable {

	public function __construct(&$db) {
		parent::__construct('#__z_stadium_news', 'id', $db);
	}
}