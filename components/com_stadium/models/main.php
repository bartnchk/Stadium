<?php

defined('_JEXEC') or die;

class StadiumModelMain extends JModelList
{
    public function getNews()
    {
        return ( $this->_db->setQuery("
          SELECT n.*, c.title AS category, c.title_ru as category_ru 
          FROM #__z_stadium_news AS n 
          INNER JOIN #__z_stadium_news_categories c ON n.category_id = c.id
          ORDER BY id DESC 
          LIMIT 4
          ")->loadObjectList() );
    }

    public function getSlides()
    {
        return ( $this->_db->setQuery("SELECT * FROM #__z_stadium_gallery_images WHERE id_gallery = 2 ORDER BY id DESC")->loadObjectList() );
    }

    public function getPartners()
    {
        return ( $this->_db->setQuery("SELECT * FROM #__z_stadium_partners WHERE published = 1")->loadObjectList() );
    }

    public function getServicesCategories()
    {
        return ( $this->_db->setQuery("SELECT * FROM #__z_stadium_services_categories WHERE published = 1")->loadObjectList() );
    }

    public function getGallery()
    {
        return ( $this->_db->setQuery("SELECT * FROM #__z_stadium_gallery_images WHERE id_gallery = 1")->loadObjectList() );
    }

    public function getEvents()
    {
        return ( $this->_db->setQuery("SELECT * FROM #__z_stadium_events WHERE published = 1 ORDER BY id DESC limit 2 ")->loadObjectList() );
    }

}