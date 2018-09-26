<?php

defined('_JEXEC') or exit();

class GalleryTableGalleryitem extends JTable {

	public function __construct(&$db) {
		parent::__construct('#__z_stadium_gallery', 'id', $db);
	}
}