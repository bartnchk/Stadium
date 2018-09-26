<?php

defined('_JEXEC') or exit();

require_once JPATH_COMPONENT.'/helpers/stadium.php';

JForm::addFieldPath(JPATH_COMPONENT . '/models/fields');

$controller = JControllerLegacy::getInstance('Stadium');

$input = JFactory::getApplication()->input;

$task = $input->get('task', 'display');

$controller->execute($task);

$controller->redirect();