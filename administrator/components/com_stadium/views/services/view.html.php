<?php

defined('_JEXEC') or exit();

class StadiumViewServices extends JViewLegacy {

	protected $items;
	protected $pagination;

	public function display($tpl = null) {

		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');

		$this->addToolbar();

        $this->loadHelper( 'stadium' );
		stadiumHelper::addSubmenu( 'services' );
        $this->sidebar = JHtmlSidebar::render();

		parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title('Услуги');
		JToolBarHelper::addNew('service.add');
		JToolBarHelper::editList('service.edit');
		JToolBarHelper::deleteList('', 'services.delete');
		JToolBarHelper::preferences('com_stadium');
	}
}