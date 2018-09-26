<?php

defined('_JEXEC') or exit();

class TouristsControllerPoints extends JControllerAdmin
{
	public function getModel($name = 'Point', $prefix = 'TouristsModel', $config = array())
    {
        return parent::getModel($name, $prefix, $config);
	}
}
