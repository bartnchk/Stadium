<?php

defined('_JEXEC') or exit();

class GalleryControllerGalleryitem extends JControllerForm 
{
	protected $view_list = 'gallery';

    public function deletepic()
    {
        $id_gallery = $this->input->get('id');
        $id_pic = $this->input->get('picid');

        $model = $this->getModel();

        $model->deletepic($id_gallery, $id_pic);

        $this->setRedirect('index.php?option=com_gallery&view=galleryitem&layout=edit&id=' . $id_gallery);
    }
}