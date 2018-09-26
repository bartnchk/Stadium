<?php

defined('_JEXEC') or exit();

class StadiumViewRule extends JViewLegacy {

	protected $form;
	protected $item;

	public function display($tpl = null) {

		$this->form = $this->get('Form');
		$this->item = $this->get('Item');

		$this->addToolbar();

		parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title(JText::_('Rule'));
		JToolBarHelper::apply('rule.apply');
		JToolBarHelper::save('rule.save');
		JToolBarHelper::cancel('rule.cancel');
	}
}