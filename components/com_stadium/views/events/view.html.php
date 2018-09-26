<?php

defined('_JEXEC') or die();

class StadiumViewEvents extends JViewLegacy
{

    protected $items;
    protected $lang;

    public function display($tpl = NULL)
    {
        $this->items = $this->get('Items');
        $this->lang = $this->lang = JFactory::getLanguage()->getTag();

        parent::display($tpl);
    }
}

?>