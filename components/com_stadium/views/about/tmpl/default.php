<?php defined('_JEXEC') or exit(); ?>

<div class="wrapper aboutStadium">
    <img src="<?php echo JUri::base(); ?>templates/stadium/img/aboutStadium.png" alt="" class="previewImgHeader">
    <div class="wrapAachievements">
        <div class="container">
            <div class="h3">
                <?= JText::_('SLAVUTICH_ARENA') ?>
            </div>
            <div class="achievements">
                <div class="achievement">
                    <div class="wrapImgAchievement">
                        <img src="<?php echo JUri::base(); ?>templates/stadium/img/achievements1.png" alt="img">
                    </div>
                    <div class="textAchievement">
                        <?= JText::_('STAD_PLACES') ?>
                    </div>
                </div>

                <div class="achievement">
                    <div class="wrapImgAchievement">
                        <img src="<?php echo JUri::base(); ?>templates/stadium/img/achievements2.png" alt="img">
                    </div>
                    <div class="textAchievement">
                        <?= JText::_('STAD_SIZE') ?>
                    </div>
                </div>

                <div class="achievement">
                    <div class="wrapImgAchievement">
                        <img src="<?php echo JUri::base(); ?>templates/stadium/img/achievements3.png" alt="img">
                    </div>
                    <div class="textAchievement">
                        <?= JText::_('STAD_AWNING') ?>
                    </div>
                </div>

                <div class="achievement">
                    <div class="wrapImgAchievement">
                        <img src="<?php echo JUri::base(); ?>templates/stadium/img/achievements4.png" alt="img">
                    </div>
                    <div class="textAchievement">
                        <?= JText::_('STAD_SKY') ?>
                    </div>
                </div>

                <div class="achievement">
                    <div class="wrapImgAchievement">
                        <img src="<?php echo JUri::base(); ?>templates/stadium/img/achievements5.png" alt="img">
                    </div>
                    <div class="textAchievement">
                        <?= JText::_('STAD_VIPPLACES') ?>
                    </div>
                </div>

                <div class="achievement">
                    <div class="wrapImgAchievement">
                        <img src="<?php echo JUri::base(); ?>templates/stadium/img/achievements6.png" alt="img">
                    </div>
                    <div class="textAchievement">
                        <?= JText::_('STAD_GUEST') ?>
                    </div>
                </div>

                <div class="achievement">
                    <div class="wrapImgAchievement">
                        <img src="<?php echo JUri::base(); ?>templates/stadium/img/achievements7.png" alt="img">
                    </div>
                    <div class="textAchievement">
                        <?= JText::_('STAD_PRESS') ?>
                    </div>
                </div>

                <div class="achievement">
                    <div class="wrapImgAchievement">
                        <img src="<?php echo JUri::base(); ?>templates/stadium/img/achievements8.png" alt="img">
                    </div>
                    <div class="textAchievement">
                        <?= JText::_('STAD_DISABLED') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blockText">
        <div class="container">
            <span class="text">
                <?php
                    if($this->lang == 'uk-UA' || !$this->params->get('about_page_description_ru',''))
                    {
                        echo $this->params->get('about_page_description_ua','');
                    }
                    else
                    {
                        $this->params->get('about_page_description_ru','');
                    }
                ?>
            </span>
        </div>
    </div>

    <div class="wrapManagement">
        <div class="container">
            <div class="h3">
                <?= JText::_('ADMINISTRATION') ?>
            </div>
            <div class="descriptionManagement">
                <?= $this->params->get('about_page_admin_description_ua',''); ?>
            </div>
            <div class="management">
                <?php
                    foreach($this->heads as $head)
                    {
                        echo '<div class="manager">';
                        echo    '<div class="wrapImgManager">';
                        echo        '<img src="'.JUri::base().$head->photo.'" alt="img">';
                        echo        '<div class="managerOverlay">';
                        echo            '<div class="text">';
                        echo                $head->description;
                        echo            '</div>';
                        echo            '<div class="mobileManager">';
                        echo                '<i class="fa fa-mobile" aria-hidden="true"></i>';
                        echo                '<a href="tel:'.$head->phone.'">';
                        echo                    '<span class="phone">'.$head->phone.'</span>';
                        echo                '</a>';
                        echo            '</div>';
                        echo            '<div class="mailManager">';
                        echo                '<a href="mailto:'.$head->email.'">';
                        echo                    '<span class="mail">'.$head->email.'</span>';
                        echo                '</a>';
                        echo            '</div>';
                        echo        '</div>';
                        echo    '</div>';
                        echo    '<div class="nameInfo">';
                        echo        $head->name . ' ' . $head->surname;
                        echo    '</div>';
                        echo    '<div class="post">';
                        echo        $head->position;
                        echo    '</div>';
                        echo '</div>';
                    }
                ?>

            </div>
        </div>

        <div class="wrapSponsorsSlider">
            <div class="container">
                <div class="sponsorsSlider">
                    <?php

                        foreach ($this->partners as $partner)
                        {
                            echo '<div class="slide">';
                            echo    '<img src="'.JUri::base().$partner->image.'" alt="img">';
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
