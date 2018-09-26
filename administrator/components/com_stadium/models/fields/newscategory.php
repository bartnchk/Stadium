<?php

defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');

class JFormFieldNewscategory extends JFormFieldList
{
	protected $type = 'newscategory';

	protected function getOptions()
	{
		$fieldname = preg_replace('/[^a-zA-Z0-9_\-]/', '_', $this->fieldname);
		$options = array();

		$db = JFactory::getDbo();
		$db->setQuery("SELECT * FROM #__z_stadium_news_categories");
		$news_categories = $db->loadObjectList();
		$options[] = (object) ['value' => '', 'text' => 'Выберите категорию'];
		foreach ($news_categories as $category)
		{
			$value = (string) $category->id;
			$text = (string) $category->title;

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
