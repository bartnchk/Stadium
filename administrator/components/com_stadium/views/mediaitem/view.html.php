<?php

defined('_JEXEC') or exit();

class StadiumViewMediaitem extends JViewLegacy {

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
		JToolBarHelper::title('Медиа');
		JToolBarHelper::apply('mediaitem.apply');
		JToolBarHelper::save('mediaitem.save');
		JToolBarHelper::cancel('mediaitem.cancel');
	}
}