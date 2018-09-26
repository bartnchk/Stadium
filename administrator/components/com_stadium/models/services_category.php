<?php

defined('_JEXEC') or exit();

class StadiumModelServices_category extends JModelAdmin {

    public function getForm($data = array(), $loadData = true) {

    	$form = $this->loadForm(
			'com_stadium.services_category',
			'services_category',
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

	public function getTable($type = 'Services_category', $prefix = 'StadiumTable', $config = array()) {
		
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
    }

} 