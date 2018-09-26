<?php

defined('_JEXEC') or exit();

class TouristsViewPhotos extends JViewLegacy
{
    protected $form;
    protected $photos;
    protected $map;

    public function display($tpl = null)
    {
        $this->addToolbar();
        $this->form = $this->get('Form');
        $this->photos = $this->get('Photos');
        $this->map = $this->get('Map');

        $this->loadHelper( 'tourists' );
        touristsHelper::addSubmenu( 'photos' );
        $this->sidebar = JHtmlSidebar::render();

        parent::display($tpl);
    }

    protected function addToolbar()
    {
        JToolBarHelper::title('Photos');
        JToolBarHelper::apply('photos.apply');
        JToolBarHelper::preferences('com_tourists');
    }
}