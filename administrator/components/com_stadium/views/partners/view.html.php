<?php

defined('_JEXEC') or exit();

class StadiumViewPartners extends JViewLegacy {

	protected $items;
	protected $pagination;

	public function display($tpl = null) {

		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');

		$this->addToolbar();

        $this->loadHelper( 'stadium' );
		stadiumHelper::addSubmenu( 'partners' );
        $this->sidebar = JHtmlSidebar::render();

		parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title('Партнёры');
		JToolBarHelper::addNew('partner.add');
		JToolBarHelper::editList('partner.edit');
		JToolBarHelper::deleteList('', 'partners.delete');
		JToolBarHelper::preferences('com_stadium');
	}
}