<?php

defined('_JEXEC') or exit();

class StadiumModelRules extends JModelList {

	protected function getListQuery() {

		$db = JFactory::getDbo();
		
		$query = $db->getQuery(true);
		$query->select('*');
		$query->from('#__z_stadium_rules');

		return $query;
	}
}