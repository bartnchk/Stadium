<?php

defined('_JEXEC') or exit();

class TouristsViewContacts extends JViewLegacy
{
    protected $form;

    public function display($tpl = null)
    {
        $this->addToolbar();
        $this->form = $this->get('Form');

        $this->loadHelper( 'tourists' );
        touristsHelper::addSubmenu( 'contacts' );
        $this->sidebar = JHtmlSidebar::render();

        parent::display($tpl);
    }

    protected function addToolbar()
    {
        JToolBarHelper::title('Контакты');
        JToolBarHelper::apply('contacts.apply');
        JToolBarHelper::preferences('com_tourists');
    }
}