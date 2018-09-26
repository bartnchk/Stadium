<?php

defined('_JEXEC') or exit();

class StadiumModelService extends JModelAdmin {

    public function getForm($data = array(), $loadData = true) {

		$form = $this->loadForm(
			'com_stadium.service',
			'service',
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

	public function getTable($type = 'Service', $prefix = 'StadiumTable', $config = array()) {
		
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