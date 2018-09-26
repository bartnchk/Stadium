<?php

defined('_JEXEC') or exit();

JForm::addFieldPath(JPATH_COMPONENT . '/models/fields');

$controller = JControllerLegacy::getInstance('Gallery');

$input = JFactory::getApplication()->input;

$task = $input->get('task', 'display');

$controller->execute($task);

$controller->redirect();