<?php

defined('_JEXEC') or exit();

class TouristsModelAttractions extends JModelList
{
	protected function getListQuery()
    {
		$query = $this->_db->getQuery(true);
		$query->select('*');
		$query->from('#__z_tourists_attractions');

		return $query;
	}
}
