<?php

defined('_JEXEC') or exit();

class StadiumTableNews_category extends JTable {

	public function __construct(&$db) {
		parent::__construct('#__z_stadium_news_categories', 'id', $db);
	}
}