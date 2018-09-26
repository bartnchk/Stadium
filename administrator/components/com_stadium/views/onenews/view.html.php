<?php

defined('_JEXEC') or exit();

class StadiumViewOnenews extends JViewLegacy {

	protected $form;
	protected $item;

	public function display($tpl = null) {

		$this->form = $this->get('Form');
		$this->item = $this->get('Item');

		$this->addToolbar();

		parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title('Новость');
		JToolBarHelper::apply('onenews.apply');
		JToolBarHelper::save('onenews.save');
		JToolBarHelper::cancel('onenews.cancel');
	}
}