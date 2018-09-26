<?php

defined('_JEXEC') or exit();

class StadiumModelHistory extends JModelList {

	protected function getListQuery() {

		$db = JFactory::getDbo();
		
		$query = $db->getQuery(true);
		$query->select('*');
		$query->from('#__z_stadium_history');
		$query->order('id DESC');

		return $query;
	}
}