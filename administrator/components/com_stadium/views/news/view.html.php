<?php

defined('_JEXEC') or exit();

class StadiumViewNews extends JViewLegacy {

	protected $items;
	protected $pagination;

	public function display($tpl = null) {

		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');

		$this->addToolbar();

        $this->loadHelper( 'stadium' );
		stadiumHelper::addSubmenu( 'news' );
        $this->sidebar = JHtmlSidebar::render();

		parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title('Новости');
		JToolBarHelper::addNew('onenews.add');
		JToolBarHelper::editList('onenews.edit');
		JToolBarHelper::deleteList('', 'news.delete');
		JToolBarHelper::preferences('com_stadium');
	}
}