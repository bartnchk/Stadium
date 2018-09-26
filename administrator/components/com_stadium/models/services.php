<?php

defined('_JEXEC') or exit();

class StadiumModelServices extends JModelList {

	protected function getListQuery() {

		$db = JFactory::getDbo();
		
		$query = $db->getQuery(true);
		$query->select('*');
		$query->from('#__z_stadium_services');

		return $query;
	}
}