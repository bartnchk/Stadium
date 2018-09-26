<?php

defined('_JEXEC') or die();
jimport( 'joomla.application.component.model' );

class StadiumModelNewsitem extends JModelLegacy
{
    protected $id = '';

    public function __construct(array $config = array())
    {
        parent::__construct($config);
        $input = JFactory::getApplication()->input;
        $this->id = $input->get('id');

        $results = $this->_db->setQuery("SELECT * FROM #__menu WHERE home = 1 AND `language`  <> ''")->loadObjectList();

        $lang = JFactory::getLanguage()->getTag();
        $post_title = '';

        $params = null;

        foreach($results as $result)
        {
            if($result->language == $lang)
            {
                $params = json_decode($result->params);
                $post_title = $params->page_title;
            }
        }

        $document = JFactory::getDocument();
        
        $title = $this->getItem()->title;
        
        $fulltitle = $title.' - '.$post_title;
        $document->setTitle( $fulltitle );

        $this->addMetaTag($document);

    }

    protected function addMetaTag($doc)
    {
        $item = $this->getItem();

        $title = $item->title;

        $description = strip_tags($item->description);

        if (mb_strlen($description) > 100)
        {
            $description = mb_substr($description, 0, 100) . '...';
        }

        $doc->setMetaData('og:title', $title);
        $doc->setMetaData('og:description', $description);
        $doc->setMetaData('og:image', JUri::base() . $item->image);
    }

    public function getItem()
    {
        return $this->_db->setQuery("
                             SELECT n.*, c.title AS category_title
                             FROM #__z_stadium_news AS n
                             INNER JOIN #__z_stadium_news_categories AS c ON n.category_id = c.id
                             WHERE alias = '$this->id'
                             ")->loadObject();
    }

    public function getNews()
    {
        return $this->_db->setQuery("
                             SELECT n.*, c.title AS category_title
                             FROM #__z_stadium_news as n 
                             INNER JOIN #__z_stadium_news_categories as c ON n.category_id = c.id
                             ORDER BY id DESC
                             LIMIT 3
                             ")->loadObjectList();
    }
}
