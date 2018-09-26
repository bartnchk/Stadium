<?php

defined('_JEXEC') or die();

$language = JFactory::getLanguage();
$extension = 'com_stadium';
$base_dir = JPATH_BASE .  '/components/' . $extension;
$language_tag = $language->getTag();
$language->load($extension, $base_dir, $language_tag, true);

$controller = JControllerLegacy::getInstance('Stadium');

$input = JFactory::getApplication()->input;

$controller->execute($input->getCmd('task'));

$controller->redirect();

?>