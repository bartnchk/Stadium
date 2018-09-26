<?php

defined('_JEXEC') or exit();

class StadiumModelProducts extends JModelList {

	protected function getListQuery() {

		$db = JFactory::getDbo();
		
		$query = $db->getQuery(true);
		$query->select('*');
		$query->from('#__z_stadium_products');

		return $query;
	}
}