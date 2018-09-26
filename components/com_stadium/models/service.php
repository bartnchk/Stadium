<?php

defined('_JEXEC') or die;

class StadiumModelService extends JModelList
{
    protected $alias;

    public function __construct(array $config = array())
    {
        parent::__construct($config);
        $input = JFactory::getApplication()->input;
        $this->alias = $input->get('id');

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

    public function getService_category()
    {
        return ( $this->_db->setQuery("SELECT * FROM #__z_stadium_services_categories WHERE alias = '$this->alias'")->loadObject() );
    }

    public function getServices()
    {
        $id_category = $this->_db->setQuery("SELECT id FROM #__z_stadium_services_categories WHERE alias = '$this->alias'")->loadResult();

        return ( $this->_db->setQuery("SELECT * FROM #__z_stadium_services WHERE category_id = '$id_category'")->loadObjectList() );
    }

}