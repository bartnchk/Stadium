<?php

defined('_JEXEC') or die();

class StadiumViewAbout extends JViewLegacy {

    protected $params;
    protected $heads;
    protected $partners;
    protected $lang;

    public function display($tpl = NULL)
    {
        $this->heads = $this->get('Heads');
        $this->partners = $this->get('Partners');
        $this->params = JComponentHelper::getParams('com_stadium');
        $this->lang = JFactory::getLanguage()->getTag();

        parent::display($tpl);
    }
}

?>