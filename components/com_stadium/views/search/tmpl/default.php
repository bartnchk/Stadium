<?php defined('_JEXEC') or exit(); ?>

<div class="searchPage">
    <div class="container">
        <h2 class="h2"><?= JText::_('SEARCH') ?></h2>

        <?php
        if($this->results['news']) {
        ?>
            <!--<h3 class="h3"><?/*= JText::_('NEWS')*/?></h3>-->
            <ul class="resultItems">
            <?php

            if($this->lang == 'uk-UA')
            {
                foreach($this->results['news'] as $result)
                {
                    echo '<li class="resultItem">';
                    echo    '<a href="'.JRoute::_('index.php?Itemid=108') . '/' . $result->alias . '" class="aResult">' . ($result->title ? $result->title : $result->title_ru) . '</a>';
                    echo '</li>';
                }
            }
            else
            {
                foreach($this->results['news'] as $result)
                {
                    echo '<li class="resultItem">';
                    echo    '<a href="'.JRoute::_('index.php?Itemid=143'). '/' . $result->alias . '" class="aResult">' . ($result->title_ru ? $result->title_ru : $result->title) . '</a>';
                    echo '</li>';
                }
            }
            ?>
            </ul>
        <?php } else {
            echo '<p class="noResults">Поиск не дал результатов</p>';
        }

        ?>

    </div>
</div>