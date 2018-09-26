<?php

defined('_JEXEC') or exit();

class StadiumViewNews_categories extends JViewLegacy {

	protected $items;
	protected $pagination;

	public function display($tpl = null) {

		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');

		$this->addToolbar();

        $this->loadHelper( 'stadium' );
		stadiumHelper::addSubmenu( 'news_categories' );
        $this->sidebar = JHtmlSidebar::render();

        parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title('Категории новостей');
		JToolBarHelper::addNew('news_category.add');
		JToolBarHelper::editList('news_category.edit');
		JToolBarHelper::deleteList('', 'news_categories.delete');
		JToolBarHelper::preferences('com_stadium');
	}
}