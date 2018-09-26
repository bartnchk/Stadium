<?php

defined('_JEXEC') or exit();

$controller = JControllerLegacy::getInstance('Team');

$input = JFactory::getApplication()->input;

$controller->execute(JFactory::getApplication()->input->get('task'));

$controller->redirect();