<?php

defined('_JEXEC') or exit();

class GalleryControllerGallery extends JControllerAdmin 
{
    public function getModel($name = 'Galleryitem', $prefix = 'GalleryModel', $config = array()) 
    {
        return parent::getModel($name, $prefix, $config);
    }
}