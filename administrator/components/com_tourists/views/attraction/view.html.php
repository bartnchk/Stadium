<?php

defined('_JEXEC') or exit();

class TouristsViewAttraction extends JViewLegacy {

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
		JToolBarHelper::title('Достопримечательность');
		JToolBarHelper::apply('attraction.apply');
		JToolBarHelper::save('attraction.save');
		JToolBarHelper::cancel('attraction.cancel');
	}
}
