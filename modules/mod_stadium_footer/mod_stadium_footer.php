<?php

	defined('_JEXEC') or die;

    $params = JComponentHelper::getParams('com_stadium');
    $inst = $params->get('instagram');
    $fb = $params->get('facebook');
    $youtube = $params->get('youtube');
    $phone = $params->get('phone');
    $email = $params->get('email');
    $address = $params->get('address');

    $db = JFactory::getDbo();
    $photos = $db->setQuery("SELECT * FROM #__z_stadium_instagram WHERE published =1 ORDER BY id DESC LIMIT 6" )->loadObjectList();

	require JModuleHelper::getLayoutPath('mod_stadium_footer', $params->get('layout', 'default'));

?>