<?php

defined('_JEXEC') or exit();

class StadiumModelEvent extends JModelAdmin {

    public function getForm($data = array(), $loadData = true) {

		$form = $this->loadForm(
			'com_stadium.event',
			'event',
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

	public function getTable($type = 'Event', $prefix = 'StadiumTable', $config = array()) {
		
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
		$img = new JImage(JPATH_ROOT . '/' . $table->image);
		if($img->getWidth() > 400)
		{
			$resized_img = $img->resize('','400',false);
			$path = JPATH_SITE . '/' .$table->image;
			$resized_img->toFile($path,2);
		}
	}
}