<?php

define('_JEXEC', 1);
define('DS', DIRECTORY_SEPARATOR);

$curDir	= dirname(__FILE__);
$curDir	= substr($curDir, 0, strrpos($curDir, DS));
$curDir	= substr($curDir, 0, strrpos($curDir, DS));
$curDir	= substr($curDir, 0, strrpos($curDir, DS));

define('JPATH_BASE', $curDir);

require_once ( JPATH_BASE.DS.'includes'.DS.'defines.php' );
require_once ( JPATH_BASE.DS.'includes'.DS.'framework.php' );

$mainframe = JFactory::getApplication('site');
$mainframe->initialise();

$input = JFactory::getApplication()->input;

$name    = $input->get('name', '', 'RAW');
$email   = $input->get('email', '', 'RAW');

$message = 'Имя отправителя: ' . $name . '<br>';
$message.= 'Email: ' . $email . '<br><br>'; 
$message.= $input->get('message', '', 'RAW');

$mailer = JFactory::getMailer();
$config = JFactory::getConfig();

$mailer->setFrom('noreply@stadion.zp.ua');
$mailer->addRecipient( $config->get( 'mailfrom' ) );
$mailer->setSubject('Новое сообщение с сайта');
$mailer->isHtml(true);

$mailer->setBody($message);

$send = $mailer->Send();

if ( $send !== true ) {
    echo 'Ошибка отправки сообщения';
} else {
    echo 'Сообщение отправлено';
}