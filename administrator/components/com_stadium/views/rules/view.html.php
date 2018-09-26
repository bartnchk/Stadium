<?php

defined('_JEXEC') or exit();

class StadiumViewRules extends JViewLegacy {

	protected $items;
	protected $pagination;

	public function display($tpl = null) {

		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');

		$this->addToolbar();

        $this->loadHelper( 'stadium' );
		stadiumHelper::addSubmenu( 'rules' );
        $this->sidebar = JHtmlSidebar::render();

		parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title('Правила поведения');
		JToolBarHelper::addNew('rule.add');
		JToolBarHelper::editList('rule.edit');
		JToolBarHelper::deleteList('', 'rules.delete');
		JToolBarHelper::preferences('com_stadium');
	}
}