<?php

defined('_JEXEC') or exit();

class StadiumViewProduct extends JViewLegacy {

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
		JToolBarHelper::title('Товары');
		JToolBarHelper::apply('product.apply');
		JToolBarHelper::save('product.save');
		JToolBarHelper::cancel('product.cancel');
	}
}