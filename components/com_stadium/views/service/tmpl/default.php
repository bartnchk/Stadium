<?php defined('_JEXEC') or exit(); ?>

<div class="restPage">
    <div class="wrapPreview">
        <div class="overlayPreview"></div>
        <div class="preview">
            <div class="h2">
                <?php
                    if($this->lang == 'uk-UA' || !$this->service_category->title_ru)
                    {
                        echo $this->service_category->title;
                    }
                    else
                    {
                        echo $this->service_category->title_ru;
                    }
                ?>
            </div>
            <div class="text">
                <?php
                    if($this->lang == 'uk-UA' || !$this->service_category->description_ru)
                    {
                        echo $this->service_category->description;
                    }
                    else
                    {
                        echo $this->service_category->description_ru;
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
                        foreach ($this->services as $service) {
                            
                            $link = JRoute::_('index.php') .'/'. $this->service_category->alias . '/' .$service->alias;
                            echo '<a href="'.$link.'" class="service">';
                            echo '<img src="'.JUri::base() . $service->images . '" alt="img">';
                            echo '<div class="servicesOverlay">';
                            echo '<div class="title">';
                            if ($this->lang == 'uk-UA' || !$service->title_ru)
                            {
                                echo $service->title;
                            }
                            else
                            {
                                echo $service->title_ru;
                            }
                            echo        '</div>';
                            echo        '<div class="text">';
                            if($this->lang == 'uk-UA' || !$service->description_ru)
                            {
                                echo $service->description;
                            }
                            else
                            {
                                echo $service->description_ru;
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