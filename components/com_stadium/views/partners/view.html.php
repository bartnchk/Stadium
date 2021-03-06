<?php

defined('_JEXEC') or die();

class StadiumViewPartners extends JViewLegacy {

    protected $partners;
    protected $params;
    protected $lang;

    public function display($tpl = NULL)
    {
        $this->partners = $this->get('Partners');
        $this->params = JComponentHelper::getParams('com_stadium');
        $this->lang = JFactory::getLanguage()->getTag();

        parent::display($tpl);
    }
}

?>