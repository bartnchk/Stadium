<?php

defined('_JEXEC') or die();

class StadiumViewServiceitem extends JViewLegacy {

    protected $params;
    protected $lang;
    protected $service;


    public function display($tpl = NULL)
    {
        $this->params = JComponentHelper::getParams('com_stadium');
        $this->lang = JFactory::getLanguage()->getTag();
        $this->service = $this->get('Service');

        parent::display($tpl);
    }
}

?>