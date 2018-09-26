<?php

defined('_JEXEC') or exit();

class StadiumModelRule extends JModelAdmin {

    public function getForm($data = array(), $loadData = true) {

		$form = $this->loadForm(
			'com_stadium.rule',
			'rule',
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

	public function getTable($type = 'Rule', $prefix = 'StadiumTable', $config = array()) {
		
		return JTable::getInstance($type, $prefix, $config);
	}

	public function delete (&$pks) {

		parent::delete($pks);
    }

	protected function loadFormData() {
		$data = $this->getItem();
		return $data;
	}

	protected function prepareTable($table)
    {
        $rules_ua = JFactory::getApplication()->input->get('rules', '', 'RAW');
        $rules_ru = JFactory::getApplication()->input->get('rules_ru', '', 'RAW');

        $rules = [];


        foreach ($rules_ua as $key => $rule_ua)
        {
            if($rules_ua[$key] && $rules_ru[$key])
                $rules[] = ['ua' => $rules_ua[$key], 'ru' => $rules_ru[$key]];
        }
        $rules = json_encode($rules, JSON_UNESCAPED_UNICODE);
        $table->rules = $rules;

        $table->check();
        $table->store();
    }
}