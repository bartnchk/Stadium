<?php

defined('_JEXEC') or exit();

?>

<div class="instagramPage">
    <div class="wrapPreview">
        <div class="overlayPreview"></div>
            <div class="preview">
                <div class="h2">
                    instaфото
                </div>
                <div class="text">
                    <?php
                        if($this->lang == 'ua-UA' || !$this->params->get('instaphoto_page_description_ru','') )
                        {
                            echo $this->params->get('instaphoto_page_description_ua','');
                        }
                        else
                        {
                            echo $this->params->get('instaphoto_page_description_ru','');
                        }
                    ?>
                </div>

                <div class="wrapBtn">
                    <a class="btn" href="http://www.instagram.com/explore/tags/славутичарена/" target="_blank">
                        <?= JText::_('TAG') ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="wrapInstagramPhotos">
            <div class="container">
                <div class="instagramPhotos">
                    <div class="firstBlock">
                        <div class="h2">
                            #славутичарена
                        </div>
                    <div class="topPhotos">
                    <?php
                        if($this->photos)
                        {
                            $count = count($this->photos);

                            if($count > 4)
                            {
                                $count = 4;
                            }

                            for($i=0; $i<$count; $i++)
                            {
                                echo '<img class="instagramPhoto" src="'.$this->photos[$i]->thumbnail_src.'" alt="img">';
                            }

                        } else {

                            echo '<div class="text">пока нет фотографий</div>';
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapTakePhoto">
            <div class="container">
                <div class="takePhoto">
                    <div class="h4">
                        <?= JText::_('GET_THERE') ?>
                    </div>
                    <div class="text">
                        <?php
                            if($this->lang == 'uk-UA' || !$this->params->get('instaphoto_page_text_ru',''))
                            {
                                echo $this->params->get('instaphoto_page_text_ua','');
                            }
                            else
                            {
                                echo $this->params->get('instaphoto_page_text_ru','');
                            }
                        ?>
                    </div>
                    <div class="wrapBtn">
                        <a href="http://www.instagram.com" class="btn" target="_blank">
                            <div class="textBtn">
                                <?= JText::_('MAKE_PHOTO') ?>
                            </div>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="mainPhoto">
                <?php
                if($this->photos)
                {
                    $counter = 0;
                    foreach ($this->photos as $photo)
                    {
                        if ($counter >= 4)
                        {
                            echo '<img class="instagramPhoto" src="' . $photo->thumbnail_src . '" alt="img">';
                        }
                        $counter++;
                    }
                }
                ?>
            </div>
<!--            <div class="wrapBtn">
                <button class="btn">
                    Завантажити ще
                </button>
            </div>-->
        </div>
    </div>
</div>


