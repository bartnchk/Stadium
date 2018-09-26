<?php

defined('_JEXEC') or exit();

class StadiumControllerRules extends JControllerAdmin {

	public function getModel($name = 'Rule', $prefix = 'StadiumModel', $config = array()) {
		return parent::getModel($name, $prefix, $config);
	}
}