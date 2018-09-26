<?php

defined('_JEXEC') or exit();

class StadiumModelNews_category extends JModelAdmin {

    public function getForm($data = array(), $loadData = true) {

    	$form = $this->loadForm(
			'com_stadium.news_category',
			'news_category',
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

	public function getTable($type = 'News_category', $prefix = 'StadiumTable', $config = array()) {
		
		return JTable::getInstance($type, $prefix, $config);
	}

	public function delete (&$pks) {

		parent::delete($pks);
    }

	protected function loadFormData() {
		$data = $this->getItem();
		return $data;
	}

} 