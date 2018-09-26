<?php

defined('_JEXEC') or exit();

class TouristsControllerHotels extends JControllerAdmin
{
	public function getModel($name = 'Hotel', $prefix = 'TouristsModel', $config = array())
    {
        return parent::getModel($name, $prefix, $config);
	}
}
