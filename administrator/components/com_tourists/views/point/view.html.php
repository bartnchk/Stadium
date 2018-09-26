<?php

defined('_JEXEC') or exit();

class TouristsViewPoint extends JViewLegacy {

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
		JToolBarHelper::title('Точка');
		JToolBarHelper::apply('point.apply');
		JToolBarHelper::save('point.save');
		JToolBarHelper::cancel('point.cancel');
	}
}
