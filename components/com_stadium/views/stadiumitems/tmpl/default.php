<?php defined('_JEXEC') or exit(); ?>

<div class="servicesPage">
    <div class="titleServicesPage">
        <div class="container">
            <div class="h2">
                <?= JText::_('STADIUM_INFO') ?>
            </div>
            <!--<div class="text">
                <?php /*$text = 'some text' */?>
                <?/*= $text */?>
            </div>-->
        </div>
    </div>

    <div class="wrapOurServices">
        <div class="container">
            <div class="ourServices">
                <div class="wrapServices">
                    <a href="<?= JUri::base() ?>stadion/about" class="service">
                        <img src="<?= JUri::base() . '/templates/stadium/img/stad/about.png' ?>">
                        <div class="servicesOverlay">
                            <div class="title">
                                <?= JText::_('MENU_ABOUT') ?>
                            </div>
                            <div class="text">

                            </div>
                        </div>
                    </a>
                    <a href="<?= JUri::base() ?>stadion/history" class="service">
                        <img src="<?= JUri::base() . '/templates/stadium/img/stad/history.png' ?>">
                        <div class="servicesOverlay">
                            <div class="title">
                                <?= JText::_('HISTORY') ?>
                            </div>
                            <div class="text">

                            </div>
                        </div>
                    </a>
                    <a href="<?= JUri::base() ?>stadion/rules" class="service">
                        <img src="<?= JUri::base() . '/templates/stadium/img/stad/rules.png' ?>">
                        <div class="servicesOverlay">
                            <div class="title">
                                <?= JText::_('RULES') ?>
                            </div>
                            <div class="text">

                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>