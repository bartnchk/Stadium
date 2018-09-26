<?php

defined('_JEXEC') or die();

class StadiumViewTeam extends JViewLegacy {

    protected $team;
    protected $heads;
    protected $products;
    protected $params;
    protected $lang;

    public function display($tpl = NULL)
    {
        $this->team = $this->get('Team');
        $this->heads = $this->get('Heads');
        $this->products = $this->get('Products');
        $this->params = JComponentHelper::getParams('com_stadium');
        $this->lang = JFactory::getLanguage()->getTag();

        parent::display($tpl);
    }
}

?>