<?php

defined('_JEXEC') or exit();

class TeamViewMembers extends JViewLegacy {

	protected $items;
	protected $pagination;

	public function display($tpl = null)
    {
		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');

		$this->addToolbar();

		parent::display($tpl);
	}

	protected function addToolbar()
    {
		JToolBarHelper::title('Члены команды');
		JToolBarHelper::addNew('member.add');
		JToolBarHelper::editList('member.edit');
		JToolBarHelper::deleteList('', 'members.delete');
	}
}