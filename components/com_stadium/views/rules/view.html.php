<?php

defined('_JEXEC') or die();

class StadiumViewRules extends JViewLegacy {

    protected $rules;
    protected $params;

    public function display($tpl = NULL)
    {
        $this->rules = $this->get('Rules');
        $this->params = JComponentHelper::getParams('com_stadium');

        parent::display($tpl);
    }
}

?>