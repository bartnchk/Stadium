<?php

defined('_JEXEC') or exit();

class StadiumViewHistory extends JViewLegacy {

	protected $items;
	protected $pagination;

	public function display($tpl = null) {

		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');

		$this->addToolbar();

        $this->loadHelper( 'stadium' );
		stadiumHelper::addSubmenu( 'history' );
        $this->sidebar = JHtmlSidebar::render();

		parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title('Великое прошлое');
		JToolBarHelper::addNew('historypoint.add');
		JToolBarHelper::editList('historypoint.edit');
		JToolBarHelper::deleteList('', 'history.delete');
		JToolBarHelper::preferences('com_stadium');
	}
}