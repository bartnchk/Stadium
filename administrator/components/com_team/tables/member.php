<?php

defined('_JEXEC') or exit();

class TeamTableMember extends JTable
{
	public function __construct(&$db)
    {
		parent::__construct('#__z_stadium_team', 'id', $db);
	}
}