<?php

defined('_JEXEC') or exit();

class StadiumModelServices_categories extends JModelList {

	protected function getListQuery() {

		$db = JFactory::getDbo();
		
		$query = $db->getQuery(true);
		$query->select('*');
		$query->from('#__z_stadium_services_categories');

		return $query;
	}
}