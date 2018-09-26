<?php

defined('_JEXEC') or exit();

class StadiumControllerProducts extends JControllerAdmin {

	public function getModel($name = 'Product', $prefix = 'StadiumModel', $config = array()) {
		return parent::getModel($name, $prefix, $config);
	}
}