<?php

defined('_JEXEC') or exit();

class TouristsViewHotels extends JViewLegacy
{
    protected $items;
    protected $pagination;

    public function display($tpl = null)
    {
        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        $this->addToolbar();

        $this->loadHelper( 'tourists' );
        touristsHelper::addSubmenu( 'hotels' );
        $this->sidebar = JHtmlSidebar::render();

        parent::display($tpl);
    }

    protected function addToolbar()
    {
        JToolBarHelper::title('Отели');
        JToolBarHelper::editList('hotel.edit');
        JToolBarHelper::preferences('com_tourists');
    }
}