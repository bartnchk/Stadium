<?php

defined('_JEXEC') or die;

class StadiumModelSearch extends JModelList
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

    public function getResults()
    {
        $result = array();

        $input = JFactory::getApplication()->input;
        $search_query = $input->get('searchit', '', 'STRING');

        $query = $this->_db->getQuery(true);

        $query->select('*');
        $query->from('#__z_stadium_news');
        $query->where('title LIKE' . $this->_db->quote('%' . $search_query . '%'));
        $query->orWhere('description LIKE' . $this->_db->quote('%' . $search_query . '%'));
        $query->orWhere('title_ru LIKE' . $this->_db->quote('%' . $search_query . '%'));
        $query->orWhere('description_ru LIKE' . $this->_db->quote('%' . $search_query . '%'));
        $query->andWhere('published = 1');
        $query->order('id DESC');

        $this->_db->setQuery($query);
        $result['news'] = $this->_db->loadObjectList();

        return $result;
    }
}