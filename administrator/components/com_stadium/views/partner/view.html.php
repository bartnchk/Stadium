<?php

defined('_JEXEC') or exit();

class StadiumViewPartner extends JViewLegacy {

	protected $form;
	protected $item;

	public function display($tpl = null) {

		$this->form = $this->get('Form');
		$this->item = $this->get('Item');

		$this->addToolbar();

		parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title('Партнёр');
		JToolBarHelper::apply('partner.apply');
		JToolBarHelper::save('partner.save');
		JToolBarHelper::cancel('partner.cancel');
	}

}