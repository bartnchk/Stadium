<?php

defined('_JEXEC') or die();

class StadiumViewStadiumitems extends JViewLegacy {

    protected $params;
    protected $lang;

    public function display($tpl = NULL)
    {
        $this->params = JComponentHelper::getParams('com_stadium');
        $this->lang = JFactory::getLanguage()->getTag();

        parent::display($tpl);
    }
}

?>