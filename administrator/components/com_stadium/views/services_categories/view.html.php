<?php

defined('_JEXEC') or exit();

class StadiumViewServices_categories extends JViewLegacy {

	protected $items;
	protected $pagination;

	public function display($tpl = null) {

		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');

		$this->addToolbar();

        $this->loadHelper( 'stadium' );
		stadiumHelper::addSubmenu( 'services_categories' );
        $this->sidebar = JHtmlSidebar::render();

        parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title('Категории услуг');
		JToolBarHelper::addNew('services_category.add');
		JToolBarHelper::editList('services_category.edit');
		JToolBarHelper::deleteList('', 'services_categories.delete');
		JToolBarHelper::preferences('com_stadium');
	}
}