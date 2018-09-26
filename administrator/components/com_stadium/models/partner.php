<?php

defined('_JEXEC') or exit();

class StadiumModelPartner extends JModelAdmin {

    public function getForm($data = array(), $loadData = true) {

		$form = $this->loadForm(
			'com_stadium.partner',
			'partner',
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

	public function getTable($type = 'Partner', $prefix = 'StadiumTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}

	public function delete (&$pks)
	{
		parent::delete($pks);
    }

	protected function loadFormData()
	{
		$data = $this->getItem();
		return $data;
	}

	public function prepareTable($table)
	{
		$image_path = JPATH_SITE . '/' . $table->image;
		$image = new JImage;
		$image->loadFile($image_path);
		if($image->getWidth() > 199)
		{
			$image = $image->Resize(200, '', false);
			$image->toFile($image_path, 2);
		}

		$background_path = JPATH_SITE . '/' . $table->background;
		$background = new JImage;
		$background->loadFile($background_path);
		if($background->getWidth() > 1920)
		{
			$background = $background->Resize(1920, '', false);
			$background->toFile($background_path,2);
		}
	}
}