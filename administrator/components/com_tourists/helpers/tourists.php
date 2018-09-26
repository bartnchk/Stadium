<?php

defined( '_JEXEC' ) or die;

class TouristsHelper
{
	static function addSubmenu( $vName )
	{
		JHtmlSidebar::addEntry(
			'Hotels',
			'index.php?option=com_tourists&view=hotels',
			$vName == 'hotels' );

        JHtmlSidebar::addEntry(
            'Contacts',
            'index.php?option=com_tourists&view=contacts',
            $vName == 'contacts' );

        JHtmlSidebar::addEntry(
            'Sights',
            'index.php?option=com_tourists&view=attractions',
            $vName == 'attractions' );

        JHtmlSidebar::addEntry(
            'Administration',
            'index.php?option=com_tourists&view=administration',
            $vName == 'administration' );

        JHtmlSidebar::addEntry(
            'Presentation & Fixtures',
            'index.php?option=com_tourists&view=settings',
            $vName == 'settings' );

        JHtmlSidebar::addEntry(
            'Map & Photos',
            'index.php?option=com_tourists&view=photos',
            $vName == 'photos' );

        JHtmlSidebar::addEntry(
            'Rules',
            'index.php?option=com_tourists&view=rules',
            $vName == 'rules' );

        JHtmlSidebar::addEntry(
            'Points',
            'index.php?option=com_tourists&view=points',
            $vName == 'points' );
	}
}