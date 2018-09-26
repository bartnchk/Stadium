<?php

defined('_JEXEC') or exit();

class TouristsViewSettings extends JViewLegacy
{
    protected $form;

    public function display($tpl = null)
    {
        $this->addToolbar();
        $this->form = $this->get('Form');

        $this->loadHelper( 'tourists' );
        touristsHelper::addSubmenu( 'settings' );
        $this->sidebar = JHtmlSidebar::render();

        parent::display($tpl);
    }

    protected function addToolbar()
    {
        JToolBarHelper::title('Настройки');
        JToolBarHelper::apply('settings.apply');
        JToolBarHelper::preferences('com_tourists');
    }
}