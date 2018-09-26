<?php

defined('_JEXEC') or exit();

class TeamModelMembers extends JModelList {

	protected function getListQuery() {

		$query = $this->_db->getQuery(true);
		$query->select('*');
		$query->from('#__z_stadium_team');

		return $query;
	}
}