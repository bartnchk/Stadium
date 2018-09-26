<?php

defined('_JEXEC') or exit();

class StadiumViewInstagram extends JViewLegacy
{
	protected $items;
	protected $pagination;
	protected $photos;

	public function display($tpl = null) {

		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');
		$this->photos = $this->get('Photos');

		$this->addToolbar();

        $this->loadHelper( 'stadium' );
		stadiumHelper::addSubmenu( 'instagram' );
        $this->sidebar = JHtmlSidebar::render();

		parent::display($tpl);
	}

	protected function addToolbar() {
		JToolBarHelper::title('Instagram');
		JToolBarHelper::preferences('com_stadium');
        JToolBarHelper::deleteList('', 'instagram.delete');
	}
}