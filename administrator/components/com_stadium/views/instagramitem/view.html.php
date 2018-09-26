<?php

defined('_JEXEC') or exit();

class StadiumViewInstagramitem extends JViewLegacy {

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
		JToolBarHelper::title('Фотографии');
		JToolBarHelper::apply('instagramitem.apply');
		JToolBarHelper::save('instagramitem.save');
		JToolBarHelper::cancel('instagramitem.cancel');
	}
}