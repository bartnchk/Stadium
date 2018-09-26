<?php defined('_JEXEC') or exit(); ?>

<div class="descriptionPage">
    <div class="descripitonImgBg">
        <img src="<?= JUri::base() . $this->service->background ?>">
    </div>

    <div class="wrapDesc">
        <div class="container">
            <div class="h2">
                <?php
                    if($this->lang == 'uk-UA' || !$this->service->title_ru)
                    {
                        echo $this->service->title;
                    }
                    else
                    {
                        echo $this->service->title_ru;
                    }
                ?>
            </div>
            <p class="descriptionText">
                <?php
                    if($this->lang == 'uk-UA' || !$this->service->description_ru)
                    {
                        echo $this->service->description;
                    }
                    else
                    {
                        echo $this->service->description_ru;
                    }
                ?>
            </p>
        </div>
    </div>

    <div class="wrapSectionInfo">
        <div class="container">
            <div class="sectionInfo">
                <div class="h3">
                    <?= JText::_('CONTACTS') ?>
                </div>
                <div class="text">
                    <?php
                    if( $this->lang == 'uk-UA' || !$this->params->get('contacts_page_description_ru','') )
                    {
                        echo $this->params->get('contacts_page_description_ua','');
                    }
                    else
                    {
                        echo $this->params->get('contacts_page_description_ru','');
                    }

                    ?>
                </div>
                <div class="phoneInfo">

                    <a href="tel:<?php echo $this->params->get('phone',''); ?>">
                                    <span class="phone">
                                        Тел.: <?php echo $this->params->get('phone',''); ?>
                                    </span>
                    </a>
                </div>
                <div class="mailInfo">
                    <a href="mailto:<?php echo $this->params->get('email',''); ?>">
                                    <span class="mail">
                                        Email: <?php echo $this->params->get('email',''); ?>
                                    </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


