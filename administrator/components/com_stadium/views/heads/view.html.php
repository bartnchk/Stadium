<?php

defined('_JEXEC') or exit();

class StadiumViewHeads extends JViewLegacy {

	protected $items;
	protected $pagination;

	public function display($tpl = null) {

		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');

		$this->addToolbar();

        $this->loadHelper( 'stadium' );
		stadiumHelper::addSubmenu( 'heads' );
        $this->sidebar = JHtmlSidebar::render();

		parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title('Администрация');
		JToolBarHelper::addNew('head.add');
		JToolBarHelper::editList('head.edit');
		JToolBarHelper::deleteList('', 'heads.delete');
		JToolBarHelper::preferences('com_stadium');
	}
}