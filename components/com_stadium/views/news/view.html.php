<?php

defined('_JEXEC') or die();

class StadiumViewNews extends JViewLegacy {

    protected $items;
    protected $news_categories;
    protected $pagination;
    protected $lang;

    public function display($tpl = NULL)
    {
        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        $this->news_categories = $this->get('NewsCategories');
        $this->lang = $this->lang = JFactory::getLanguage()->getTag();

        parent::display($tpl);
    }
}

?>