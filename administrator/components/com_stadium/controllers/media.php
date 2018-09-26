<?php

defined('_JEXEC') or exit();

class StadiumControllerMedia extends JControllerAdmin {

	public function getModel($name = 'Mediaitem', $prefix = 'StadiumModel', $config = array()) {
		return parent::getModel($name, $prefix, $config);
	}
}