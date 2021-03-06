<?php

defined('_JEXEC') or exit();

class StadiumViewServices_category extends JViewLegacy {

	protected $form;
	protected $item;

	public function display($tpl = null) {

		$this->form = $this->get('Form');
		$this->item = $this->get('Item');

		$this->addToolbar();

		parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title('Категория услуг');
		JToolBarHelper::apply('services_category.apply');
		JToolBarHelper::save('services_category.save');
		JToolBarHelper::cancel('services_category.cancel');
	}
}