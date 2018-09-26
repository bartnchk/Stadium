<?php

defined('_JEXEC') or exit();

class StadiumViewMedia extends JViewLegacy {

	protected $items;
	protected $pagination;

	public function display($tpl = null) {

		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');

		$this->addToolbar();

        $this->loadHelper( 'stadium' );
		stadiumHelper::addSubmenu( 'media' );
        $this->sidebar = JHtmlSidebar::render();

		parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title('Медиа');
		JToolBarHelper::addNew('mediaitem.add');
		JToolBarHelper::editList('mediaitem.edit');
		JToolBarHelper::deleteList('', 'media.delete');
		JToolBarHelper::preferences('com_stadium');
	}
}