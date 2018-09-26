<?php

defined('_JEXEC') or die();

class StadiumViewHistory extends JViewLegacy {

    protected $slides;
    protected $params;
    protected $history;

    public function display($tpl = NULL)
    {
        $this->slides = $this->get('Gallery');
        $this->history = $this->get('History');
        $this->params = JComponentHelper::getParams('com_stadium');

        parent::display($tpl);
    }
}

?>