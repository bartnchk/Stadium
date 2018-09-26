<?php defined('_JEXEC') or die; ?>

<footer class="footer">

    <div class="wrapFooterTop">
        <div class="container">

            <div class="footerTop">
                <div class="footerPartWrap">

                    <div class="footerPart">
                        <div class="footerTitle">
                            <?= JText::_('STADIUM') ?>
                        </div>
                        <ul>
                            <li>
                                <a href="<?= JRoute::_('index.php?Itemid=115')?>">
                                    <?= JText::_('MENU_ABOUT') ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= JRoute::_('index.php?Itemid=117')?>">
                                    <?= JText::_('MENU_RULES') ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= JRoute::_('index.php?Itemid=109')?>">
                                    <?= JText::_('MENU_POSTER') ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= JRoute::_('index.php?Itemid=142')?>">
                                    <?= JText::_('OUR_SERVICES') ?>
                                </a>
                            </li>
                             <li>
                                <a href="http://mfcmetalurg.com/" target="_blank">
                                    <?= JText::_('MENU_METALLURG') ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= JRoute::_('index.php?Itemid=110')?>">
                                    <?= JText::_('MENU_MEDIA') ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= JRoute::_('index.php?Itemid=111')?>">
                                    <?= JText::_('MENU_PARTNERS') ?>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="footerPart footerContacts">
                        <div class="footerTitle">
                            <?= JText::_('CONTACTS') ?>
                        </div>
                        <ul>
                            <li class="infoItem">
                                <?= $address ?>
                            </li>
                            <li class="infoItem">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                <a href="tel:<?= $phone ?>">
                                    <span class="footerPhone">
                                        <?= $phone ?>
                                    </span>
                                </a>
                            </li>
                            <li class="infoItem">
                                <a href="mailto:<?= $email ?>">
                                    <span class="footerMail">
                                        <?= $email ?>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="wrapSocial">
                            <a href="http://<?= $fb ?>" target="_blank">
                                <i class="fa fa-facebook socialIcon" aria-hidden="true"></i>
                            </a>
                            <a href="http://<?= $inst ?>" target="_blank">
                                <i class="fa fa-instagram socialIcon" aria-hidden="true"></i>
                            </a>
                            <a href="http://<?= $youtube ?>" target="_blank">
                                <i class="fa fa-youtube socialIcon" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="footerPartWrap">
                    <div class="footerPart">
                        <div class="footerTitle">
                            #славутичарена
                        </div>
                        <div class="wrapInstagram">
                            <?php
                                foreach($photos as $photo)
                                {
                                    echo '<img class="instagramPhoto" src="'.$photo->thumbnail_src.'" alt="img">';
                                }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="wrapFooterBot">
        <div class="container">
            <div class="footerBot">

                <a href="http://zengineers.company/" target="_blank" class="linkDevelopers">
                    <div class="devText">
                        <?= JText::_('MADE_BY') ?>
                    </div>
                    <div class="logoFooter">
                        <svg version="1.1" id="Слой_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;"
                             xml:space="preserve">
                        <style type="text/css">
                            /*.st0{fill:#46BDE3;}*/
                        </style>
                            <switch>
                                <foreignObject requiredExtensions="&ns_ai;" x="0" y="0" width="1" height="1">
                                    <i:pgfRef  xlink:href="#adobe_illustrator_pgf">
                                    </i:pgfRef>
                                </foreignObject>
                                <g i:extraneous="self">
                                    <path id="skobka2" class="logoFooter" d="M1.2,88.3l41.9-58.4c1.1-1.5,2.9-2.4,4.8-2.4l9.7,0l-44,59.8l0.2,0.3l71.1,0
                                    c2.2,0,4.2,1.2,5.2,3.2l2.7,5.3c0.2,0.4-0.1,0.9-0.5,0.9L5.7,97c-0.2,0-0.4-0.1-0.5-0.3l-4-7.8C1.1,88.7,1.1,88.5,1.2,88.3z"/>
                                    <path id="skobka1" class="logoFooter" d="M99.5,11.4l-41.6,58c-1.1,1.5-2.9,2.5-4.8,2.4l-9.6-0.1l43.7-59.3l-0.2-0.3l-71.1,0
                                    c-2.2,0-4.2-1.2-5.2-3.2L7.8,3.6C7.6,3.2,7.9,2.7,8.4,2.7L95,2.7c0.2,0,0.4,0.1,0.5,0.3l4,7.8C99.6,11,99.6,11.2,99.5,11.4z"/>
                                </g>
                            </switch>
                    </svg>
                    </div>
                </a>

                <div class="copyright">
                    <?= JText::_('COPYRIGHT') . date('Y') ?>
                </div>

            </div>
        </div>
    </div>
</footer>