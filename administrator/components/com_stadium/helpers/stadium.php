<?php

defined( '_JEXEC' ) or die;

class StadiumHelper
{
	static function addSubmenu( $vName )
	{
		JHtmlSidebar::addEntry(
			'События',
			'index.php?option=com_stadium&view=events',
			$vName == 'events' );

		JHtmlSidebar::addEntry(
			'Категории новостей',
			'index.php?option=com_stadium&view=news_categories',
			$vName == 'news_categories' );

		JHtmlSidebar::addEntry(
			'Новости',
			'index.php?option=com_stadium&view=news',
			$vName == 'news' );

		JHtmlSidebar::addEntry(
			'Категории услуг',
			'index.php?option=com_stadium&view=services_categories',
			$vName == 'services_categories' );

		JHtmlSidebar::addEntry(
			'Услуги',
			'index.php?option=com_stadium&view=services',
			$vName == 'services' );

		JHtmlSidebar::addEntry(
			'Партнёры',
			'index.php?option=com_stadium&view=partners',
			$vName == 'partners' );

		JHtmlSidebar::addEntry(
			'Администрация',
			'index.php?option=com_stadium&view=heads',
			$vName == 'heads' );

		JHtmlSidebar::addEntry(
			'Правила поведения',
			'index.php?option=com_stadium&view=rules',
			$vName == 'rules' );

        JHtmlSidebar::addEntry(
            'Медиа',
            'index.php?option=com_stadium&view=media',
            $vName == 'media' );

        JHtmlSidebar::addEntry(
            'Продукция',
            'index.php?option=com_stadium&view=products',
            $vName == 'products' );

        JHtmlSidebar::addEntry(
            'Великое прошлое',
            'index.php?option=com_stadium&view=history',
            $vName == 'history' );

        JHtmlSidebar::addEntry(
            'Instagram',
            'index.php?option=com_stadium&view=instagram',
            $vName == 'instagram' );
	}
}