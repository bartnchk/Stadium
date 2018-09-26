<?php defined('_JEXEC') or exit(); ?>

<div class="newsPage">
    <div class="wrapHeadNews">
        <div class="container">
            <div class="h2">
                <?= JText::_('NEWS') ?>
            </div>

            <div class="wrapFilters">

                <div class="mobMenu">
                    <div class="filterTitleText"><?= JText::_('NEWS_FILTERS') ?></div>
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up hiddenIcon"></i>
                </div>

                <div class="wrapTabs">
                    <div class="tab active">
                        <?= JText::_('ALL_NEWS') ?>
                    </div>
                    <?php
                        foreach ($this->news_categories as $category)
                        {
                            echo '<div class="tab item" data-category="cat'.$category->id.'">';
                            if($this->lang == 'uk-UA' || !$category->title_ru)
                            {
                                echo $category->title;
                            }
                            else
                            {
                                echo $category->title_ru;
                            }
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapCardsNews">
        <div class="container">
            <div class="cardsNews">
                <?php

                    foreach ($this->items as $item)
                    {

                        $img = JUri::base() . str_replace('images/news/','images/news/thumb_',$item->background);

                        echo '<div class="item cat'.$item->category_id.'">';
                        echo    '<div class="wrapImg">';
                        echo        '<img src="'.$img.'" alt="img">';
                        echo        '<div class="label">';
                        if($this->lang == 'uk-UA' || !$item->category_title_ru)
                        {
                            echo $item->category_title;
                        }
                        else
                        {
                            echo $item->category_title_ru;
                        }
                        echo        '</div>';
                        echo    '</div>';
                        echo    '<div class="wrapContent">';
                        echo        '<div class="top">';
                        echo            '<div class="h4">';
                        if($this->lang == 'uk-UA' || !$item->title_ru)
                        {
                            echo $item->title;
                        }
                        else
                        {
                            echo $item->title_ru;
                        }
                        echo            '</div>';
                        echo            '<div class="text">';
                        if($this->lang == 'uk-UA' || !$item->description_ru)
                        {
                            echo $item->description;
                        }
                        else
                        {
                            echo $item->description_ru;
                        }
                        echo            '</div>';
                        echo        '</div>';
                        echo        '<div class="bottom">';
                        echo            '<div class="date">';
                        echo                $item->date;
                        echo            '</div>';
                        echo            '<a class="readIt" href="' .JRoute::_('index.php') .'/'. $item->alias . '">';
                        echo                JText::_('READ_MORE');
                        echo            '</a>';
                        echo        '</div>';
                        echo    '</div>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="countWrapper">
        <?php echo $this->pagination->getPagesLinks(); ?>
        <!--<a href="#" class="number active">1</a>
        <a href="#" class="number">2</a>
        <a href="#" class="number">
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
        </a>-->
    </div>
</div>

