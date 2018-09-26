<?php

defined('_JEXEC') or die;

class StadiumModelNews extends JModelList
{

    public function __construct(array $config = array())
    {
         parent::__construct($config);

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

        $fulltitle = $document->title.' - '.$post_title;
        $document->setTitle( $fulltitle );
    }

    protected function getListQuery()
    {
        $query = parent::getListQuery();
        $query->select('n.*, c.id as category_id, c.title as category_title, c.title_ru as category_title_ru');
        $query->from('#__z_stadium_news as n');
        $query->innerJoin('#__z_stadium_news_categories as c ON n.category_id = c.id');
        $query->where('n.published = 1');
        $query->order('date DESC');

        return $query;
    }

    public function getNewsCategories()
    {
        return ( $this->_db->setQuery("SELECT * FROM #__z_stadium_news_categories WHERE published = 1")->loadObjectList() );
    }
}