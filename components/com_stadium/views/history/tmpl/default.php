<?php defined('_JEXEC') or die() ?>

<div class="pastPage">
    <div class="pastImgBg">
        <div class="overlayPastImg"></div>
    </div>

    <div class="wrapDesc">
        <div class="container">
            <div class="h2">
                <?= JText::_('HISTORY') ?>
            </div>
            <p class="descriptionText">
                <?= $this->params->get('history_page_description_ua','') ?>
            </p>
        </div>
    </div>

    <div class="wrapHistoryMobile">
        <div class="overlayHistory"></div>
        <div class="line"></div>
        <div class="dots">
            <?php
                $qnt = count($this->history);

                for($i=0; $i<$qnt; $i++)
                {
                    $flag = '';

                    if ($i == 0)
                    {
                        $flag = 'active';
                    }

                    if($i < 5)
                    {
                        echo '<div class="borderItem visible '.$flag.'">';
                    }
                    else
                    {
                        echo '<div class="borderItem'.$flag.'">';
                    }

                    echo    '<div class="item">';
                    echo        '<div class="title">';
                    echo            $this->history[$i]->year;
                    echo        '</div>';
                    echo    '</div>';
                    echo '</div>';
                }
            ?>

        </div>

        <div class="datesSlider">
            <?php
                foreach($this->history as $item)
                {
                    echo '<div class="slideText">';
                    echo    $item->description;
                    echo '</div>';
                }
            ?>
        </div>
    </div>

    <div class="wrapHistoryDesktop">
        <div class="overlayHistory"></div>
        <img class="imgHistory" alt="imgHistory" src="<?php JUri::base(); ?>templates/stadium/img/history.png">
        <div class="line"></div>
        <div class="dots">
            <?php
                $qnt = count($this->history);

                for($i=0; $i<$qnt; $i++)
                {
                    $flag = '';

                    if ($i == 0)
                    {
                        $flag = 'active';
                    }

                    if($i < 5)
                    {
                        echo '<div class="borderItem visible '.$flag.'">';
                    }
                    else
                    {
                        echo '<div class="borderItem'.$flag.'">';
                    }

                    echo    '<div class="item">';
                    echo        '<div class="title">';
                    echo            $this->history[$i]->year;
                    echo        '</div>';
                    echo    '</div>';
                    echo '</div>';
                }
            ?>
        </div>

        <div class="datesSlider">
            <?php
            foreach($this->history as $item)
            {
                echo '<div class="slideText">';
                echo    $item->description;
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <div class="wrapStadiumToday">
        <div class="container">
            <div class="stadiumToday">
                <div class="h2">
                    <?= JText::_('STADIUM_TODAY') ?>
                </div>
                <div class="text">
                    <?= $this->params->get('history_page_stadium_today_ua','') ?>
                </div>
            </div>
        </div>
        <div class="slidersToday">
            <div class="sliderStadionTodayTop">
                <?php
                    foreach($this->slides as $slide)
                    {
                        echo '<div class="slide">';
                        echo    '<img src="'.JUri::base().'images/gallery/'.$slide->id_gallery.'/'.$slide->file.'" alt="img">';
                        echo '</div>';
                    }
                ?>
            </div>
            <div class="sliderStadionTodayBottom">
                <?php
                foreach($this->slides as $slide)
                {
                    echo '<div class="slide">';
                    echo    '<img class="bottomImg" src="'.JUri::base().'images/gallery/'.$slide->id_gallery.'/'.$slide->file.'" alt="img">';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>

</div>
