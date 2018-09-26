<?php

defined('_JEXEC') or exit();

class StadiumModelNews_categories extends JModelList {

	protected function getListQuery() {

		$db = JFactory::getDbo();
		
		$query = $db->getQuery(true);
		$query->select('*');
		$query->from('#__z_stadium_news_categories');

		return $query;
	}
}