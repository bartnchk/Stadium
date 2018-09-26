<?php

defined('_JEXEC') or exit();

class StadiumControllerNews_categories extends JControllerAdmin {

	public function getModel($name = 'news_category', $prefix = 'StadiumModel', $config = array()) {
		return parent::getModel($name, $prefix, $config);
	}
}