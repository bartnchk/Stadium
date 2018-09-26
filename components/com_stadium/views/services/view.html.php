<?php

defined('_JEXEC') or die();

class StadiumViewServices extends JViewLegacy {

    protected $services_categories;
    protected $params;
    protected $lang;

    public function display($tpl = NULL)
    {
        $this->lang = JFactory::getLanguage()->getTag();
        $this->services_categories = $this->get('ServicesCategories');
        $this->params = JComponentHelper::getParams('com_stadium');

        parent::display($tpl);
    }
}

?>