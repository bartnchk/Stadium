<?php

defined('_JEXEC') or exit();

class StadiumControllerServices extends JControllerAdmin {

	public function getModel($name = 'Service', $prefix = 'StadiumModel', $config = array()) {
		return parent::getModel($name, $prefix, $config);
	}
}