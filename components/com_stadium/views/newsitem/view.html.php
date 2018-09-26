<?php

defined('_JEXEC') or die();

class StadiumViewNewsitem extends JViewLegacy {

    protected $item;
    protected $news;
    protected $lang;

    public function display($tpl = NULL)
    {
        $this->item = $this->get('Item');

        if(!$this->item)
            throw new RuntimeException('Новость не найдена', 404);

        $this->news = $this->get('News');
        $this->lang = JFactory::getLanguage()->getTag();

        parent::display($tpl);
    }
}

?>