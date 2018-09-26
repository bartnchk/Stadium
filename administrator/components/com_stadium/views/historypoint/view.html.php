<?php

defined('_JEXEC') or exit();

class StadiumViewHistorypoint extends JViewLegacy {

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
		JToolBarHelper::apply('historypoint.apply');
		JToolBarHelper::save('historypoint.save');
		JToolBarHelper::cancel('historypoint.cancel');
	}
}