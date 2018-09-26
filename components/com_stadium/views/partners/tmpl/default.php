<?php defined('_JEXEC') or exit(); ?>

<div class="partnersPage">

    <div class="wrapPreview">
        <div class="overlayPreview"></div>
        <div class="preview">
            <div class="h2">
                <?= JText::_('METALLURG')?>
            </div>
            <div class="text">
                <?php
                    if( $this->lang == 'uk-UA' || !$this->params->get('partners_page_description_ru') )
                    {
                        echo $this->params->get('partners_page_description_ua');
                    }
                    else
                    {
                        echo $this->params->get('partners_page_description_ru');
                    }
                ?>
            </div>
        </div>
    </div>

    <!--  -->
    <!--<div class="wrapSponsorsSlider">
        <div class="container">
            <div class="sponsorsSlider">
                <?php
/*                    foreach ($this->partners as $partner)
                    {
                        echo '<div class="slide">';
                        echo '<img src="'.JUri::base().$partner->image.'" alt="img">';
                        echo '</div>';
                    }
                */?>
            </div>
        </div>
    </div>-->

    <!--  -->

    <div class="wrapSponsorsBlock">
        <div class="container">
            <div class="items">
                <?php foreach ($this->partners as $partner) : ?>
                <div class="item">
                    <div class="wrapImg">
                        <img src="<?= JUri::base().$partner->background ?>" alt="img">
                        <div class="overlaySponsor">
                            <div class="wrapInfo">
                                <div class="textBlock">
                                    <div class="h4">
                                        <?= $partner->title ?>
                                    </div>
                                    <div class="text">
                                        <?php
                                        if($this->lang == 'uk-UA' || !$partner->description_ru)
                                        {
                                            echo $partner->description;
                                        }
                                        else
                                        {
                                            echo $partner->description_ru;
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="wrapBtn">
                                <?php if($partner->site) : ?>
                                    <a href="http://<?= $partner->site ?>" class="btn" target="_blank">
                                        Перейти на сайт
                                    </a>
                                <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
