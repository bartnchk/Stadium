<?php

defined('_JEXEC') or exit();

class TouristsViewPoints extends JViewLegacy
{
    protected $items;
    protected $pagination;

    public function display($tpl = null)
    {
        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        $this->addToolbar();

        $this->loadHelper( 'tourists' );
        touristsHelper::addSubmenu( 'points' );
        $this->sidebar = JHtmlSidebar::render();

        parent::display($tpl);
    }

    protected function addToolbar()
    {
        JToolBarHelper::title('Точки');
        JToolbarHelper::addNew('point.add');
        JToolBarHelper::editList('point.edit');
        JToolBarHelper::deleteList('', 'points.delete');
        JToolBarHelper::preferences('com_tourists');
    }
}