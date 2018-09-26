<?php

defined('_JEXEC') or exit();

class TeamModelMember extends JModelAdmin {

    public function getForm($data = array(), $loadData = true)
    {
        $form = $this->loadForm('com_team.member', 'member', array('control' => 'jform', 'load_data' => $loadData));

		if (empty($form))
        {
            return false;
        }

        return $form;
	}

	public function getTable($type = 'Member', $prefix = 'TeamTable', $config = array())
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
        $img = new JImage(JPATH_ROOT . '/' . $table->photo);
        if( $img->getWidth() > 370 || $img->getHeight() > 370 )
        {
            $resized_img = $img->cropResize(370, 370, false);
            $path = JPATH_SITE . '/' .$table->photo;
            $resized_img->toFile($path,2);
        }
    }

}