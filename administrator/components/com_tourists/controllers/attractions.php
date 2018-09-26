<?php

defined('_JEXEC') or exit();

class TouristsControllerAttractions extends JControllerAdmin
{
	public function getModel($name = 'Attraction', $prefix = 'TouristsModel', $config = array())
    {
        return parent::getModel($name, $prefix, $config);
	}
}
