<?php

defined('_JEXEC') or exit();

class StadiumModelInstagram extends JModelList {

    public function __construct(array $config = array())
    {
        parent::__construct($config);
    }

    protected function getListQuery()
    {
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select('*');
		$query->from('#__z_stadium_instagram');
		$query->order('id DESC');

		return $query;
	}

	public function getPhotos()
    {
        $tag = 'славутичарена';
        $baseUrl = 'https://www.instagram.com/explore/tags/'.$tag.'/?__a=1';

        $last_pic_date = $this->_db->setQuery("SELECT date FROM #__z_stadium_instagram ORDER BY date DESC LIMIT 1")->loadResult();

        $json = json_decode(file_get_contents($baseUrl));

        foreach ($json->graphql->hashtag->edge_hashtag_to_media->edges as $item)
        {
            $pic = $item->node;

            if($item->node->taken_at_timestamp > $last_pic_date)
            {
                $query = $this->_db->getQuery(true);
                $query->insert('#__z_stadium_instagram');
                $query->set('id_inst = ' . $this->_db->quote($pic->id));
                $query->set('thumbnail_src = ' . $this->_db->quote($pic->thumbnail_src));
                $query->set('display_src = ' . $this->_db->quote($pic->thumbnail_resources[4]->src));
                $query->set('date = ' . $this->_db->quote($pic->taken_at_timestamp));

                $this->_db->setQuery($query)->execute();


//                $this->_db->setQuery("INSERT INTO #__z_stadium_instagram
//                (id, id_inst, thumbnail_src, display_src, date, published)
//                VALUES ('',$item->id, '$item->thumbnail_src', '$item->display_src', $item->date,'')");

//                $this->_db->execute();
            }
        }

    }
}