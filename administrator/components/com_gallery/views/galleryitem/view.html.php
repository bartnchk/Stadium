<?php

defined('_JEXEC') or exit();

class GalleryViewGalleryitem extends JViewLegacy {

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
		JToolBarHelper::title(JText::_('Элемент страницы'));
		JToolBarHelper::apply('galleryitem.apply');
		JToolBarHelper::save('galleryitem.save');
		JToolBarHelper::cancel('galleryitem.cancel');
	}
}