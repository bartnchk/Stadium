<?php

defined('_JEXEC') or exit();

class TouristsViewAdministration extends JViewLegacy
{
    protected $form;

    public function display($tpl = null)
    {
        $this->addToolbar();

        $this->loadHelper( 'tourists' );
        touristsHelper::addSubmenu( 'administration' );
        $this->sidebar = JHtmlSidebar::render();
        $this->form = $this->get('form');

        parent::display($tpl);
    }

    protected function addToolbar()
    {
        JToolBarHelper::title('Администрация');
        JToolBarHelper::apply('administration.apply');
        JToolBarHelper::preferences('com_tourists');
    }
}