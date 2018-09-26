<?php

defined('_JEXEC') or exit();

class TouristsViewRules extends JViewLegacy
{
    protected $form;

    public function display($tpl = null)
    {
        $this->addToolbar();
        $this->form = $this->get('Form');

        $this->loadHelper( 'tourists' );
        touristsHelper::addSubmenu( 'rules' );
        $this->sidebar = JHtmlSidebar::render();

        parent::display($tpl);
    }

    protected function addToolbar()
    {
        JToolBarHelper::title('Rules');
        JToolBarHelper::apply('rules.apply');
        JToolBarHelper::preferences('com_tourists');
    }
}