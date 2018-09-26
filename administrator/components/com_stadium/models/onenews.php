<?php

defined('_JEXEC') or exit();

class StadiumModelOnenews extends JModelAdmin {

    public function getForm($data = array(), $loadData = true) {

		$form = $this->loadForm(
			'com_stadium.onenews',
			'onenews',
			array(
				'control' => 'jform',
				'load_data' => $loadData
				)
			);

		if (empty($form))
			return false;
		else
			return $form;
	}

	public function getTable($type = 'Onenews', $prefix = 'StadiumTable', $config = array()) {
		
		return JTable::getInstance($type, $prefix, $config);
	}

	public function delete (&$pks) {

		parent::delete($pks);
    }

	protected function loadFormData() {
		$data = $this->getItem();
		return $data;
	}

    public function prepareTable($table)
    {
        if (!$table->alias) {
            $table->alias = JFilterOutput::stringURLSafe($table->title);
        }

        $table->check();
        $table->store();

        $img_orig = new JImage(JPATH_ROOT . '/' . $table->background);
        $img_thumb = new JImage(JPATH_ROOT . '/' . $table->background);

        if($img_orig->getWidth() > 770)
        {
            $orig  = $img_orig->cropResize(770,500,false);
        }

        if($img_thumb->getWidth() > 370)
        {
            $thumb = $img_thumb->cropResize(370,265,false);
        }

        $orig_name  = str_replace('images/news/','', $table->background);
        $thumb_name = 'images/news/thumb_' . $orig_name;

        $path = JPATH_SITE . '/images/news';
        if(!JFolder::exists($path))
        {
            JFolder::create($path);
        }

        $path_to_orig = JPATH_SITE . '/' . $table->background;
        $orig->toFile($path_to_orig, 2);

        $path_to_thumb = JPATH_SITE . '/' . $thumb_name;
        $thumb->toFile($path_to_thumb, 2);
    }

} 