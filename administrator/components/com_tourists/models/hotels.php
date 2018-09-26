<?php

defined('_JEXEC') or exit();

class TouristsModelHotels extends JModelList
{
	protected function getListQuery()
    {
		$query = $this->_db->getQuery(true);
		$query->select('*');
		$query->from('#__z_tourists_hotels');

		return $query;
	}
}
