<?php

defined('_JEXEC') or exit();

class TouristsViewAttractions extends JViewLegacy
{
    protected $items;
    protected $pagination;

    public function display($tpl = null)
    {
        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        $this->addToolbar();

        $this->loadHelper( 'tourists' );
        touristsHelper::addSubmenu( 'attractions' );
        $this->sidebar = JHtmlSidebar::render();

        parent::display($tpl);
    }

    protected function addToolbar()
    {
        JToolBarHelper::title('Достопримечательности');
        JToolBarHelper::addNew('attraction.add');
        JToolBarHelper::editList('attraction.edit');
        JToolBarHelper::preferences('com_tourists');
    }
}