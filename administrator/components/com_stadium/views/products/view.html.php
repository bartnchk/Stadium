<?php

defined('_JEXEC') or exit();

class StadiumViewProducts extends JViewLegacy {

	protected $items;
	protected $pagination;

	public function display($tpl = null) {

		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');

		$this->addToolbar();

        $this->loadHelper( 'stadium' );
		stadiumHelper::addSubmenu( 'products' );
        $this->sidebar = JHtmlSidebar::render();

		parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title('Мероприятия');
		JToolBarHelper::addNew('product.add');
		JToolBarHelper::editList('product.edit');
		JToolBarHelper::deleteList('', 'products.delete');
		JToolBarHelper::preferences('com_stadium');
	}
}