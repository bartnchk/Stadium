<?php

defined('_JEXEC') or exit();

class StadiumViewHead extends JViewLegacy {

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
		JToolBarHelper::title('Представитель администрации');
		JToolBarHelper::apply('head.apply');
		JToolBarHelper::save('head.save');
		JToolBarHelper::cancel('head.cancel');
	}

}