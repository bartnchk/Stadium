<?php defined('_JEXEC') or exit(); ?>

<div class="teamPage">
    <div class="wrapPreview">
        <div class="overlayPreview"></div>
        <div class="preview">
            <div class="h2">
                <?= JText::_('METALLURG') ?>
            </div>
            <div class="text">
                <?php
                    if($this->lang == 'uk-UA' || !$this->params->get('metallurg_page_description_ru'))
                    {
                        echo $this->params->get('metallurg_page_description_ua');
                    }
                    else
                    {
                        echo $this->params->get('metallurg_page_description_ru');
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="wrapTeam">
        <div class="managersBlock">
            <div class="container">
                <div class="h4">
                    <?= JText::_('ADMINISTRATORS') ?>
                </div>
                <div class="managerSlider">
                    <?php
                    foreach($this->heads as $head)
                    {
                        echo '<div class="slide">';
                        echo    '<div class="wrapImg">';
                        echo        '<img src="'.JUri::base().$head->photo.'" alt="img">';
                        echo        '<div class="overlayManager">';
                        echo            '<div class="contactPhone">';
                        echo                '<i class="fa fa-mobile" aria-hidden="true"></i>';
                        echo                '<a href="tel:'.$head->phone.'">';
                        echo                    '<div class="textPart">';
                        echo                        $head->phone;
                        echo                    '</div>';
                        echo                '</a>';
                        echo            '</div>';
                        echo            '<div class="contactMail">';
                        echo                '<a href="mailto:'.$head->email.'">';
                        echo                    '<div class="textPart">';
                        echo                        $head->email;
                        echo                    '</div>';
                        echo                '</a>';
                        echo            '</div>';
                        echo            '<div class="wrapSocial">';
                        if($head->social)
                        {
                            echo                '<a href="http://'.$head->social.'" target="_blanc">';
                            echo                    '<i class="fa fa-facebook socialIcon" aria-hidden="true"></i>';
                            echo                '</a>';
                        }
                        echo            '</div>';
                        echo        '</div>';
                        echo    '</div>';
                        echo    '<div class="wrapInfo">';
                        echo        '<div class="name">'.$head->name.' '.$head->surname.'</div>';
                        if($this->lang == 'uk-UA' || !$head->position_ru)
                        {
                            echo '<div class="post">'.$head->position.'</div>';
                        }
                        else
                        {
                            echo '<div class="post">'.$head->position_ru.'</div>';
                        }

                        if($this->lang == 'uk-UA' || !$head->description_ru)
                        {
                            echo '<div class="text">'.$head->description.'</div>';
                        }
                        else
                        {
                            echo '<div class="text">'.$head->description_ru.'</div>';
                        }
                        echo    '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="wrapImgMiddle">
            <img class="bgTeamPhoto" src="<?php echo JUri::base(); ?>templates/stadium/img/teamPhoto.png" alt="img">
            <div class="descImg">
                <div class="h2">
                    <?= JText::_('TEAM') ?>
                </div>
                <div class="title">
                     <?= 'сезон ' . date('Y') . '/' . (date('y') + 1)?>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapBigSliderManagers">
        <div class="container">
            <div class="bigSliderManager">

                <?php
                    foreach($this->team as $member)
                    {
                        if($member->category == 2)
                        {
                            echo '<div class="slide">';
                            echo    '<img src="'.JUri::base().$member->photo.'" alt="img">';
                            echo    '<div class="overlayMainManager">';
                            echo        '<div class="name">'.$member->name.' '.$member->surname.'</div>';
                            if($this->lang == 'uk-UA' || !$member->role_ru)
                            {
                                echo '<div class="post">'.$member->role.'</div>';
                            }
                            else
                            {
                                echo '<div class="post">'.$member->role_ru.'</div>';
                            }

                            if($this->lang == 'uk-UA' || !$member->description_ru)
                            {
                                echo '<div class="text">'.$member->description.'</div>';
                            }
                            else
                            {
                                echo '<div class="text">'.$member->description_ru.'</div>';
                            }
                            echo    '</div>';
                            echo '</div>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="wrapPlayers">
        <div class="players">
            <?php
                foreach ($this->team as $member)
                {
                    if($member->category == 1)
                    {
                        echo '<div class="player">';
                        echo    '<img src="'.JUri::base().$member->photo.'" alt="img">';
                        if($this->lang == 'uk-UA' || !$member->role_ru)
                        {
                            echo '<div class="position">'.$member->role.'</div>';
                        }
                        else
                        {
                            echo '<div class="position">'.$member->role_ru.'</div>';
                        }

                        echo    '<div class="number">#'.$member->number.'</div>';
                        echo    '<div class="overlayGradient">';
                        echo        '<div class="name">'.$member->name.' '.$member->surname.'</div>';
                        echo    '</div>';
                        echo    '<div class="overlayInfo">';
                        echo        '<div class="wrap">';
                        echo            '<div class="nameSecond">'.$member->name.' '.$member->surname.'</div>';
                        echo            '<div class="numberSecond">'.$member->number.'</div>';
                        echo        '</div>';
                        if($this->lang == 'uk-UA' || !$member->role_ru)
                        {
                            echo '<div class="positionSecond">'.$member->role.'</div>';
                        }
                        else
                        {
                            echo '<div class="positionSecond">'.$member->role_ru.'</div>';
                        }
                        $birth = date('d-m-y',strtotime($member->birth) );
                        echo '<div class="date">'.JText::_('BIRTH').': '.$birth.'</div>';
                        if($this->lang == 'uk-UA' || !$member->description)
                        {
                            echo '<div class="text">'.$member->description.'</div>';
                        }
                        else
                        {
                            echo '<div class="text">'.$member->description_ru.'</div>';
                        }
                        echo    '</div>';
                        echo '</div>';
                    }
                }
            ?>
        </div>
    </div>

    <div class="wrapSymbols">
        <div class="container">
            <div class="h2">
                <?= JText::_('SYMBOL') ?>
            </div>
            <div class="text">
                <?php
                    if($this->lang == 'uk-UA' || !$this->params->get('symbol_metallurg_page_description_ru') )
                    {
                        echo $this->params->get('symbol_metallurg_page_description_ua');
                    }
                    else
                    {
                        echo $this->params->get('symbol_metallurg_page_description_ru');
                    }
                ?>
            </div>
        </div>

        <div class="wrapDescription">
            <div class="container">
                <div class="wrapImg">
                    <img src="<?php echo JUri::base()?>templates/stadium/img/logoTeam.png" alt="img">
                </div>
                <div class="text">
                    <?php
                        if($this->lang == 'uk-UA' || !$this->params->get('metallurg_symbol_page_description_ua') )
                        {
                            echo $this->params->get('metallurg_symbol_page_description_ua');
                        }
                        else
                        {
                            echo $this->params->get('metallurg_symbol_page_description_ru');
                        }
                    ?>
                </div>
                <div class="text">
                </div>
            </div>
        </div>
    </div>

    <div class="wrapProducts">
        <div class="container">
            <div class="productsSlider">
                <?php
                    foreach ($this->products as $product)
                    {
                        echo '<a href="#" class="slide">';
                        echo    '<div class="wrapImg">';
                        echo        '<img src="'.JUri::base().$product->image.'" alt="img">';
                        echo    '</div>';
                        echo    '<div class="overlayProduct">';
                        if($this->lang == 'uk-UA' || !$product->title_ru)
                        {
                            echo '<div class="name">'.$product->title.'</div>';
                        }
                        else
                        {
                            echo '<div class="name">'.$product->title_ru.'</div>';
                        }
                        echo        '<div class="title">«МФК Металург»</div>';
                        echo    '</div>';
                        echo '</a>';
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="wrapTeamContacts">
        <div class="map" id="map"></div>
        <div class="contacts">
            <div class="h2">
                <?= JText::_('CONTACTS') ?>
            </div>
            <div class="text">
                <?php
                    if($this->lang == 'uk-UA' || !$this->params->get('contacts_page_description_ru'))
                    {
                        echo $this->params->get('contacts_page_description_ua');
                    }
                    else
                    {
                        echo $this->params->get('contacts_page_description_ru');
                    }
                ?>
            </div>

            <div class="contactMap">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <div class="textPart">
                    <?= $this->params->get('address') ?>
                </div>
            </div>

            <div class="contactPhone">
                <i class="fa fa-mobile" aria-hidden="true"></i>
                <a href="tel:<?= $this->params->get('phone') ?>">
                    <div class="textPart">
                        <?= $this->params->get('phone') ?>
                    </div>
                </a>
            </div>

            <div class="contactMail">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="mailto:<?= $this->params->get('email') ?>">
                    <div class="textPart">
                        <?= $this->params->get('email') ?>
                    </div>
                </a>
            </div>

            <div class="h4">
                <?= JText::_('SOCIAL') ?>
            </div>

            <div class="wrapSocial">
                <a href="http://<?= $this->params->get('facebook') ?>" target="_blank">
                    <i class="fa fa-facebook socialIcon lightBlueIconOnWhiteBgc" aria-hidden="true"></i>
                </a>
                <a href="http://<?= $this->params->get('instagram') ?>" target="_blank">
                    <i class="fa fa-instagram socialIcon lightBlueIconOnWhiteBgc" aria-hidden="true"></i>
                </a>
                <a href="http://<?= $this->params->get('youtube') ?>" target="_blank">
                    <i class="fa fa-youtube socialIcon lightBlueIconOnWhiteBgc" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</div>






