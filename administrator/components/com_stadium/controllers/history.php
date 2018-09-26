<?php

defined('_JEXEC') or exit();

class StadiumControllerHistory extends JControllerAdmin {

	public function getModel($name = 'Historypoint', $prefix = 'StadiumModel', $config = array()) {
		return parent::getModel($name, $prefix, $config);
	}
}