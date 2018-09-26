<?php

defined('_JEXEC') or exit();

class TeamControllerMembers extends JControllerAdmin
{
	public function getModel($name = 'Member', $prefix = 'TeamModel', $config = array())
    {
		return parent::getModel($name, $prefix, $config);
	}
}