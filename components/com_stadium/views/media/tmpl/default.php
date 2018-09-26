<?php
    defined('_JEXEC') or exit();

    $page_title = $this->params->get('media_page_title');;
?>


<div class="mediaPage">
    <div class="titleServicesPage">
        <div class="container">
            <div class="h2">
                <?= JText::_('MEDIA') ?>
            </div>
            <div class="text">
                <?php
                    if( $this->lang == 'uk-UA' || !$this->params->get('media_page_description_ru') )
                    {
                        echo $this->params->get('media_page_description_ua');
                    }
                    else
                    {
                        echo $this->params->get('media_page_description_ru');
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="wrapMediaBlock container">
        <?php
            foreach ($this->items as $item)
            {
                echo '<div class="item">';
                echo    '<div class="wrapImg">';
                echo        '<img src="'.JUri::base().$item->background.'" alt="img">';
                echo        '<div class="overlayMedia">';
                echo            '<div class="container">';
                echo                '<div class="wrapInfo">';
                echo                    '<div class="h4">';
                if( $this->lang == 'uk-UA' || !$item->title_ru)
                {
                    echo $item->title;
                }
                else
                {
                    echo $item->title_ru;
                }
                echo                    '</div>';
                echo                    '<div class="text">';
                if( $this->lang == 'uk-UA' || !$item->description_ru)
                {
                    echo $item->description;
                }
                else
                {
                    echo $item->description_ru;
                }
                echo                    '</div>';
                echo                '</div>';
                echo            '</div>';
                echo        '</div>';
                echo    '</div>';
                echo '</div>';
            }
        ?>
    </div>

</div>