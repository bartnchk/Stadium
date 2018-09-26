<?php

defined('_JEXEC') or exit();

class TeamViewMember extends JViewLegacy {

	protected $form;
	protected $item;

	public function display($tpl = null) {

		$this->form = $this->get('Form');
		$this->item = $this->get('Item');

		$this->addToolbar();

		parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title('Член команды');
		JToolBarHelper::apply('member.apply');
		JToolBarHelper::save('member.save');
		JToolBarHelper::cancel('member.cancel');
	}
}