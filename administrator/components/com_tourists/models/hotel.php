<?php

defined('_JEXEC') or exit();

class TouristsModelHotel extends JModelAdmin
{
	public function getForm( $data = array(), $loadData = true )
    {
		$form = $this->loadForm( 'com_tourists.hotel', 'hotel',
            array( 'control'   => 'jform', 'load_data' => $loadData
		));

		if ( empty( $form ) )
		{
			return false;
		}

		return $form;
	}

	public function getTable( $type = 'Hotel', $prefix = 'TouristsTable', $config = array() )
    {
		return JTable::getInstance( $type, $prefix, $config );
	}

	public function delete( &$pks )
    {
		parent::delete( $pks );
	}

	protected function loadFormData()
    {
		return $this->getItem();
	}
}
