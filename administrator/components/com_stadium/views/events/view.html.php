<?php

defined('_JEXEC') or exit();

class StadiumViewEvents extends JViewLegacy {

	protected $items;
	protected $pagination;

	public function display($tpl = null) {

		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');

		$this->addToolbar();

        $this->loadHelper( 'stadium' );
		stadiumHelper::addSubmenu( 'events' );
        $this->sidebar = JHtmlSidebar::render();

		parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title('Мероприятия');
		JToolBarHelper::addNew('event.add');
		JToolBarHelper::editList('event.edit');
		JToolBarHelper::deleteList('', 'events.delete');
		JToolBarHelper::preferences('com_stadium');
	}
}