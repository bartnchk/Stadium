<?php

defined('_JEXEC') or exit();

class StadiumViewEvent extends JViewLegacy {

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
		JToolBarHelper::title('Меропрития');
		JToolBarHelper::apply('event.apply');
		JToolBarHelper::save('event.save');
		JToolBarHelper::cancel('event.cancel');
	}
}