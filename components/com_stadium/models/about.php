<?php

defined('_JEXEC') or die;

class StadiumModelAbout extends JModelList
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

    public function getHeads()
    {
        return ( $this->_db->setQuery("SELECT * FROM #__z_stadium_heads ORDER BY ordering ASC")->loadObjectList() );
    }

    public function getPartners()
    {
        return ( $this->_db->setQuery("SELECT * FROM #__z_stadium_partners WHERE published = 1")->loadObjectList() );
    }
}