<?php

defined('_JEXEC') or exit();

class StadiumViewNews_category extends JViewLegacy {

	protected $form;
	protected $item;

	public function display($tpl = null) {

		$this->form = $this->get('Form');
		$this->item = $this->get('Item');

		$this->addToolbar();

		parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title(JText::_('Категория новостей'));
		JToolBarHelper::apply('news_category.apply');
		JToolBarHelper::save('news_category.save');
		JToolBarHelper::cancel('news_category.cancel');
	}
}