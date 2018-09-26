<?php

defined('_JEXEC') or exit();

class StadiumTablePartner extends JTable {

	public function __construct(&$db) {
		parent::__construct('#__z_stadium_partners', 'id', $db);
	}
}