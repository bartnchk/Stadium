<?php

defined('_JEXEC') or die();

class StadiumViewMain extends JViewLegacy {

    protected $news;
    protected $slides;
    protected $partners;
    protected $services_categories;
    protected $gallery;
    protected $events;
    protected $params;
    protected $lang;

    protected function addMetaTags($title = NULL, $description = NULL, $image = NULL)
    {
        $doc = JFactory::getDocument();

        $jConfig  = JFactory::getConfig();
        $description = $jConfig->get('MetaDesc');
        
        $doc->setMetaData('og:title', $doc->title);
        $doc->setMetaData('og:description', $description);
        $doc->setMetaData('og:image', JUri::base() . 'images/gallery/2/' .$this->slides[0]->file);
    }


    public function display($tpl = NULL)
    {
        $this->lang = JFactory::getLanguage()->getTag();

        $this->news = $this->get('News');
        $this->slides = $this->get('Slides');
        $this->partners = $this->get('Partners');
        $this->services_categories = $this->get('ServicesCategories');
        $this->gallery = $this->get('Gallery');
        $this->events = $this->get('Events');

        $this->params = JComponentHelper::getParams('com_stadium');
        $this->addMetaTags();

        parent::display($tpl);
    }
}

?>