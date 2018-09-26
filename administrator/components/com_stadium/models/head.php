<?php

defined('_JEXEC') or exit();

class StadiumModelHead extends JModelAdmin {

    public function getForm($data = array(), $loadData = true) {

		$form = $this->loadForm(
			'com_stadium.head',
			'head',
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

	public function getTable($type = 'Head', $prefix = 'StadiumTable', $config = array()) {
		
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
		$img = new JImage(JPATH_ROOT . '/' . $table->photo);
		if( $img->getWidth() > 300 || $img->getHeight() > 300 )
		{
			$resized_img = $img->cropResize(300,300,false);
			$path = JPATH_SITE . '/' .$table->photo;
			$resized_img->toFile($path,2);
		}
	}
}