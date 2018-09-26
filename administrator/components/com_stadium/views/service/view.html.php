<?php

defined('_JEXEC') or exit();

class StadiumViewService extends JViewLegacy {

	protected $form;
	protected $item;

	public function display($tpl = null) {

		$this->form = $this->get('Form');
		$this->item = $this->get('Item');

		$this->addToolbar();

		parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title('Услуга');
		JToolBarHelper::apply('service.apply');
		JToolBarHelper::save('service.save');
		JToolBarHelper::cancel('service.cancel');
	}

}