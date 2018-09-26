<?php

defined('_JEXEC') or exit();

class StadiumControllerServices_categories extends JControllerAdmin {

	public function getModel($name = 'services_category', $prefix = 'StadiumModel', $config = array()) {
		return parent::getModel($name, $prefix, $config);
	}
}