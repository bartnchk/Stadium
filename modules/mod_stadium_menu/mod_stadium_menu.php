<?php

	defined('_JEXEC') or die;

    $params = JComponentHelper::getParams('com_stadium');
    $inst = $params->get('instagram');
    $fb = $params->get('facebook');
    $youtube = $params->get('youtube');

	$lang = JFactory::getLanguage()->getTag();

	if($lang == 'uk-UA')
    {
        $db = JFactory::getDbo();
        $menu = $db->setQuery("SELECT m.* 
          FROM #__menu m
          WHERE m.menutype = 'topmenu' AND m.published = 1 
          ORDER by m.lft ASC")->loadObjectList();
    }
    else
    {
        $db = JFactory::getDbo();
        $menu = $db->setQuery("SELECT id, menutype, title as note, alias, note as title, path, link, type, published, parent_id, level, component_id, checked_out, checked_out_time, browserNav, access, img, template_style_id, params, lft, rgt, home, language, client_id 
          FROM #__menu m
          WHERE m.menutype = 'topmenu' AND m.published = 1 
          ORDER by m.lft ASC")->loadObjectList();
    }

    require JModuleHelper::getLayoutPath('mod_stadium_menu', $params->get('layout', 'default'));



