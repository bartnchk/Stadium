<?php

defined('_JEXEC') or exit();

class GalleryViewGallery extends JViewLegacy {

	protected $items;

	public function display($tpl = null) {
		$this->items = $this->get('Items');
		$this->addToolbar();
		parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title('Фотогалерея сайта');
	}
}