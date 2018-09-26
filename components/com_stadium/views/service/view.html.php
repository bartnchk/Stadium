<?php

defined('_JEXEC') or die();

class StadiumViewService extends JViewLegacy {

    //protected $params;
    protected $service_category;
    protected $lang;
    protected $services;


    public function display($tpl = NULL)
    {
        $this->params = JComponentHelper::getParams('com_stadium');
        $this->service_category = $this->get('Service_category');
        $this->lang = JFactory::getLanguage()->getTag();
        $this->services = $this->get('Services');

        parent::display($tpl);
    }
}

?>