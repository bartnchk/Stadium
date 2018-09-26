<?php

defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');

class JFormFieldNews_category extends JFormFieldList
{
	protected $type = 'news_category';

	protected function getOptions()
	{
		$fieldname = preg_replace('/[^a-zA-Z0-9_\-]/', '_', $this->fieldname);
		$options = array();

		$db = JFactory::getDbo();
		$db->setQuery("SELECT * FROM #__z_stadium_news_categories");
		$news_categories = $db->loadObjectList();

		$options[] = (object) ['value' => '', 'text' => 'Выберите агентство'];
		foreach ($news_categories as $actegory)
		{
			$value = (string) $category->id;
			$text = (string) $type->title;

			$tmp = array(
				'value'    => $value,
				'text'     => JText::alt($text, $fieldname)
			);

			$options[] = (object) $tmp;
		}

		reset($options);

		return $options;
	}
}
