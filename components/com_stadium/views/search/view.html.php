<?php

defined('_JEXEC') or die();

class StadiumViewSearch extends JViewLegacy {

    protected $results;
    protected $lang;

    public function display($tpl = NULL)
    {
        $this->results = $this->get('Results');
        $this->lang = JFactory::getLanguage()->getTag();

        parent::display($tpl);
    }
}

?>