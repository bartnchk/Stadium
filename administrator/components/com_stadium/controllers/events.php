<?php

defined('_JEXEC') or exit();

class StadiumControllerEvents extends JControllerAdmin {

	public function getModel($name = 'Event', $prefix = 'StadiumModel', $config = array()) {
		return parent::getModel($name, $prefix, $config);
	}
}