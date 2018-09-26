<?php

defined('_JEXEC') or exit();

$email = $this->params->get('email');
$phone = $this->params->get('phone');

?>

<div class="servicesPage">
    <div class="titleServicesPage">
        <div class="container">
            <div class="h2">
                <?= JText::_('OUR_SERVICES') ?>
            </div>
            <div class="text">
                <?php
                    if( $this->lang == 'uk-UA' || !$this->params->get('services_page_description_ru') )
                    {
                        echo $this->params->get('services_page_description_ua');
                    }
                    else
                    {
                        echo $this->params->get('services_page_description_ru');
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="wrapOurServices">
        <div class="container">
            <div class="ourServices">
                <div class="wrapServices">
                    <?php
                    foreach($this->services_categories as $category)
                    {
                        $link = JRoute::_('index.php') .'/'. $category->alias;
                        echo '<a href="'.$link.'" class="service">';
                        echo    '<img src="'.JUri::base().$category->image.'" alt="img">';
                        echo    '<div class="servicesOverlay">';
                        echo        '<div class="title">';
                        if($this->lang == 'uk-UA' || !$category->title_ru)
                        {
                            echo $category->title;
                        }
                        else
                        {
                            echo $category->title_ru;
                        }
                        echo        '</div>';
                        echo        '<div class="text">';
                        if($this->lang == 'uk-UA' || !$category->description_ru)
                        {
                            echo $category->description;
                        }
                        else
                        {
                            echo $category->description_ru;
                        }
                        echo        '</div>';
                        echo    '</div>';
                        echo '</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!--<div class="wrapSectionInfo">
        <div class="container">
            <div class="sectionInfo">
                <?php /*if($this->params->get('services_content_ua') || $this->params->get('services_content_ru')) { */?>
                <div class="h3">
                    <?php
/*                        if( $this->lang == 'uk-UA' || !$this->params->get('services_title_ru') )
                        {
                            echo $this->params->get('services_title_ua');
                        }
                        else
                        {
                            echo $this->params->get('services_title_ru');
                        }
                    */?>
                </div>
                <div class="text">
                    <?php
/*                        if( $this->lang == 'uk-UA' || !$this->params->get('services_content_ua') )
                        {
                            echo $this->params->get('services_content_ua');
                        }
                        else
                        {
                            echo $this->params->get('services_content_ru');
                        }
                    */?>
                </div>
                <?php /*} */?>
                <div class="phoneInfo">
                    <a href="tel:<?/*= $phone */?>">
                                    <span class="phone">
                                        Тел.: <?/*= $phone */?>
                                    </span>
                    </a>
                </div>
                <div class="mailInfo">
                    <a href="mailto:<?/*= $email */?>">
                        <span class="mail">
                            Email: <?/*= $email */?>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
-->
</div>




