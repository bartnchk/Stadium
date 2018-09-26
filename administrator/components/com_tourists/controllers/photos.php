<?php

defined('_JEXEC') or exit();

class TouristsControllerPhotos extends JControllerForm
{
    public function deletePhoto()
    {
        $src = $this->input->get('src', '', 'RAW');

        $model = $this->getModel('photos', 'TouristsModel');

        $model->deletePhoto($src);

        exit;
    }
}
