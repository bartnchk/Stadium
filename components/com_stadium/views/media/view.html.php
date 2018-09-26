<?php

defined('_JEXEC') or die();

class StadiumViewMedia extends JViewLegacy {

    protected $items;
    protected $params;
    protected $lang;

    public function display($tpl = NULL)
    {
        $this->items = $this->get('Items');
        $this->params = JComponentHelper::getParams('com_stadium');
        $this->lang = JFactory::getLanguage()->getTag();
        parent::display($tpl);
    }
}

?>