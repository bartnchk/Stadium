<?php

defined('_JEXEC') or exit();

class SitemapModelItems extends JModelList {

	protected function getListQuery() {

		$db = JFactory::getDbo();

		$query = $db->getQuery(true);
		$query->select('*');
		$query->from('#__sitemap');

		return $query;
	}

	public function generateMap(){
		
	    $results = [];

		$query = $this->_db->getQuery(true);


		//menu
		$query->select('path')
		      ->from('#__menu')
		      ->where('menutype = ' . $this->_db->quote('topmenu') )
		      ->andWhere('published = 1')
			  ->andWhere('type = ' . $this->_db->quote('component'));

        $results['static'] = $this->_db->setQuery($query)->loadObjectList();


		//news
		$query->clear();
		$query->select('alias')
			  ->from('#__z_stadium_news')
			  ->where('published = 1');
		$results['news'] = $this->_db->setQuery($query)->loadObjectList();


		//services
        $query->clear();
        $query->select('s.alias as service, c.alias as category')
            ->from('#__z_stadium_services s')
            ->innerJoin('#__z_stadium_services_categories c ON s.category_id = c.id')
            ->where('s.published = 1');
        $results['services'] = $this->_db->setQuery($query)->loadObjectList();


        //service categories
        $query->clear();
        $query->select('c.alias')
            ->from('#__z_stadium_services_categories c')
            ->where('c.published = 1');
        $results['service_categories'] = $this->_db->setQuery($query)->loadObjectList();


		$map  = "<?xml version='1.0' encoding='UTF-8'?>". "\n";
		$map .= "<urlset xmlns='https://www.sitemaps.org/schemas/sitemap/0.9'>" . "\n";
		$map .=	"<url>" . "\n";

		$map .= "<loc>" .JUri::root() . "</loc>";
		$map .= "<changefreq>daily</changefreq>" . "\n";
		$map .= "<lastmod>" . date( 'Y-m-d' ) . "</lastmod>" . "\n";
		$map .= "<priority>1</priority>" . "\n";

		foreach ($results as $key => $items)
		{
			foreach ( $items as $item )
			{
				if($key == 'news')
				{
					$map .= "<loc>" . JUri::root() . $key .'/'. $item->alias . "</loc>" . "\n";
				}
                elseif($key == 'services')
                {
                    $map .= "<loc>" . JUri::root() . $key .'/'. $item->category . '/' . $item->service . "</loc>" . "\n";
                }
                elseif($key == 'service_categories')
                {
                    $map .= "<loc>" . JUri::root() . 'services/'. $item->alias . "</loc>" . "\n";
                }
				else
                {
					$map .= "<loc>" . JUri::root() . $item->path  . "</loc>" . "\n";
				}

                $map .= "<changefreq>daily</changefreq>" . "\n";
                $map .= "<lastmod>" . date( 'Y-m-d' ) . "</lastmod>" . "\n";
                $map .= "<priority>0.5</priority>" . "\n";
			}
		}

		$map .= "</url>". "\n";
		$map .=	"</urlset>". "\n";

		file_put_contents(JPATH_ROOT. '/sitemap.xml' , $map);

		$xml = simplexml_load_file(JPATH_ROOT. '/sitemap.xml');

		$count = count($xml->url->loc);


		$this->_db->setQuery('DELETE FROM #__sitemap')->execute();


		$query->clear();
		for($i=0; $i<$count; $i++)
		{
			$query->insert( '#__sitemap' )
			      ->set( 'loc = ' . $this->_db->quote($xml->url->loc[$i]) )
			      ->set( 'changefreq = ' . $this->_db->quote($xml->url->changefreq[$i]) )
			      ->set( 'lastmode = NOW()')
			      ->set( 'priority = ' . $this->_db->quote($xml->url->priority[$i]) );
			$this->_db->setQuery($query)->execute();
			$query->clear();
		}

		JFactory::getApplication()->enqueueMessage('Sitemap has been generated');
		JFactory::getApplication()->redirect('/administrator/index.php?option=com_sitemap&view=items' );
	}
}
