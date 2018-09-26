<?php

defined('_JEXEC') or die();

class StadiumViewInstaphoto extends JViewLegacy {

    //protected $items;
    protected $photos;
    protected $params;
    protected $lang;

    public function display($tpl = NULL)
    {
        //$this->items = $this->get('Items');
        $this->photos = $this->get('Photos');
        $this->params = JComponentHelper::getParams('com_stadium');
        $this->lang = JFactory::getLanguage()->getTag();

        parent::display($tpl);
    }
}

?>