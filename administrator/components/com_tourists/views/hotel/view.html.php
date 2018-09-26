<?php

defined('_JEXEC') or exit();

class TouristsViewHotel extends JViewLegacy {

	protected $form;
	protected $item;

	public function display($tpl = null)
    {
		$this->form = $this->get('Form');
		$this->item = $this->get('Item');
		$this->addToolbar();

		parent::display($tpl);
	}

	protected function addToolbar()
    {
		JToolBarHelper::title('Отель');
		JToolBarHelper::apply('hotel.apply');
		JToolBarHelper::save('hotel.save');
		JToolBarHelper::cancel('hotel.cancel');
	}
}
