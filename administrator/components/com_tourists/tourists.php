<?php

defined('_JEXEC') or exit();

require_once JPATH_COMPONENT.'/helpers/tourists.php';

JForm::addFieldPath(JPATH_COMPONENT . '/models/fields');

$controller = JControllerLegacy::getInstance('Tourists');

$input = JFactory::getApplication()->input;

$task = $input->get('task', 'display');

$controller->execute($task);

$controller->redirect();