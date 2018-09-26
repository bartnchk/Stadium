<?php

defined('_JEXEC') or exit();

class TouristsModelPoints extends JModelList
{
	protected function getListQuery()
    {
		$query = $this->_db->getQuery(true);
		$query->select('*');
		$query->from('#__z_tourists_points');

		return $query;
	}
}
