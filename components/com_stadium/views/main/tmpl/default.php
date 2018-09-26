<?php
    defined('_JEXEC') or exit();

    $ua_months = [
            '01' => 'січня',
            '02' => 'лютого',
            '03' => 'березня',
            '04' => 'квитня',
            '05' => 'травня',
            '06' => 'червня',
            '07' => 'липня',
            '08' => 'серпня',
            '09' => 'вересня',
            '10' => 'жовтня',
            '11' => 'листопада',
            '12' => 'грудня'
    ];

    $ru_months = [
            '01' => 'января',
            '02' => 'февраля',
            '03' => 'марта',
            '04' => 'апреля',
            '05' => 'мая',
            '06' => 'июня',
            '07' => 'июля',
            '08' => 'августа',
            '09' => 'сентября',
            '10' => 'октября',
            '11' => 'ноября',
            '12' => 'декабря'
    ];
?>
<div class="indexPage">
    <div class="wrap100vh">
        <div class="wrapHeaderSlider">
            <div class="overlaySlider"></div>
            <div class="headerSlider">
                <?php foreach ($this->slides as $slide) : ?>
                    <div class="slide">
                        <img src="<?= JUri::base().'/images/gallery/'.$slide->id_gallery.'/'.$slide->file ?>" alt="img" />
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="container">
            <div class="wrapCounterBlock">
                <div class="wrapCounter">
                    <div class="wrapImg">
                        <img src="<?= JUri::base(); ?>/templates/stadium/img/counter1.jpg" alt="img">
                    </div>
                    <div class="number">
                        <span class="value">12000</span>
                    </div>
                    <div class="titleCounter">
                        <?= JText::_('PLACES') ?>
                    </div>
                </div>

                <div class="wrapCounter">
                    <div class="wrapImg">
                        <img src="<?= JUri::base(); ?>/templates/stadium/img/counter2.jpg" alt="img">
                    </div>
                    <div class="number">
                        <span class="value">2450</span>
                    </div>
                    <div class="titleCounter">
                        <?= JText::_('ACTIVITIES') ?>
                    </div>
                </div>

                <div class="wrapCounter">
                    <div class="wrapForPlusSign">
                        <div class="wrapImg">
                            <img src="<?= JUri::base(); ?>/templates/stadium/img/counter3.jpg" alt="img">
                        </div>
                        <div class="number">
                            <span class="value">4000</span>
                            <span>+</span>
                        </div>
                        <div class="titleCounter">
                            <?= JText::_('VIEWERS') ?>
                        </div>
                    </div>
                </div>

                <div class="wrapCounter">
                    <div class="wrapImg">
                        <img src="<?= JUri::base(); ?>/templates/stadium/img/counter4.jpg" alt="img">
                    </div>
                    <div class="number">
                        <span class="value">120</span>
                    </div>
                    <div class="titleCounter">
                        <?= JText::_('STAFF') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax">
        <div class="parallaxOverlay"></div>
        <div class="container">
            <div class="wrapNews">
                <div class="newEvents">
                    <div class="newsHeader">
                        <div class="h2">
                            <?= JText::_('EVENTS') ?>
                        </div>
                        <a href="<?= JRoute::_('index.php?Itemid=109')?>" class="newsLink">
                            <?= JText::_('ALL_EVENTS') ?>
                        </a>
                    </div>

                    <div class="wrapItems">
                        <?php foreach ($this->events as $event) : ?>
                            <?php $path = JUri::base() . $event->image ?>
                            <div class="event-item">
                                <div class="newsImg" style="background-image:url('<?= $path ?>')">
                                    <img src="<?= $path ?>" alt="img">
                                </div>
                                <div class="itemBottom">
                                    <div class="top">
                                        <h4 class="h4">
                                            <?php
                                                if($this->lang == 'uk-UA' || !$event->title_ru)
                                                    echo $event->title;
                                                else
                                                    echo $event->title_ru;
                                            ?>
                                        </h4>
                                        <div class="newsText">
                                            <?php
                                                if($this->lang == 'uk-UA' || !$event->description_ru)
                                                    echo $event->description;
                                                else
                                                    echo $event->description_ru;
                                            ?>
                                        </div>
                                        <?php if($event->is_free) { ?>
                                            <div class="price">
                                                <?= JText::_('TICKET_PRICE') . ': ' . $event->price . ' грн' ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="bottom">
                                        <div class="wrapDateTime">
                                            <div class="date">
                                                <?php
                                                    $date = strtotime($event->date);
                                                    echo date('d',$date);

                                                    if($this->lang == 'uk-UA')
                                                        echo ' <span class="month">' . $ua_months[date('m',$date)] . '</span>';
                                                    else
                                                        echo ' ' . $ru_months[date('m',$date)];
                                                ?>
                                            </div>
                                            <div class="time">
                                                <?= $event->time ?>
                                            </div>
                                        </div>
                                        <div class="wrapBtn<?= $event->is_free ? '' : ' free' ?>">
                                            <?php
                                                if($event->link && $event->is_free)
                                                    echo '<a class="btn" target="_blanc" href="http://' . $event->link . '">'.JText::_('TICKET_BUY').'</a>';
                                                else if($event->link)
                                                    echo '<span class="btn">'.JText::_('FREE').'</span>';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="breakingNews">
                    <div class="h2">
                        <?php echo JText::_('BREAKING_NEWS'); ?>
                    </div>

                    <div class="wrapArticles">
                        <?php foreach ($this->news as $newsitem) : ?>
                            <div class="article">
                                <div class="articleHeader">
                                    <div class="date">
                                        <?php
                                            $date = strtotime($newsitem->date);
                                                if($this->lang == 'uk-UA')
                                                    echo date('d',$date) . ' ' . $ua_months[date('m',$date)] . ' ' . date('Y', $date);
                                                else
                                                    echo date('d',$date) . ' ' . $ru_months[date('m',$date)] . ' ' . date('Y', $date);
                                        ?>
                                    </div>
                                    <div class="label">
                                        <?php
                                            if($this->lang == 'uk-UA' || !$newsitem->category_ru)
                                                echo $newsitem->category;
                                            else
                                                echo $newsitem->category_ru;
                                        ?>
                                    </div>
                                </div>
                                <h4 class="h4">
                                    <?php
                                        if($this->lang == 'uk-UA' || !$newsitem->title_ru)
                                            echo $newsitem->title;
                                        else
                                            echo $newsitem->title_ru;
                                    ?>
                                </h4>
                                <div class="articleText">
                                    <?php
                                        if($this->lang == 'uk-UA' || !$newsitem->description_ru)
                                        {
                                            if (mb_strlen($newsitem->description) > 400)
                                                $desc = mb_substr($newsitem->description, 0, 400) . '...';
                                            else
                                                $desc = $newsitem->description;

                                            echo $desc;
                                        }
                                        else
                                        {
                                            if (mb_strlen($newsitem->description_ru) > 400)
                                                $desc = mb_substr($newsitem->description_ru, 0, 400) . '...';
                                            else
                                                $desc = $newsitem->description_ru;

                                            echo $desc;
                                        }
                                    ?>
                                </div>
                                <?php $link = JRoute::_('index.php?Itemid=108') . '/' .$newsitem->alias; ?>
                                <a class="readIt" href="' . $link . '">
                                    <?= JText::_('READ_MORE') ?>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapOurServices">
        <div class="container">
            <div class="ourServices">
                <div class="h3">
                    <?php echo JText::_('OUR_SERVICES'); ?>
                </div>
                <div class="wrapServices">
                    <?php foreach($this->services_categories as $service) : ?>
                        <?php $link = JRoute::_('index.php?Itemid=107') . '/' .$service->alias; ?>
                        <a href="<?= $link ?>" class="service">
                            <img src="<?= JUri::base().$service->image ?>" alt="img">
                            <div class="servicesOverlay">
                                <div class="title">
                                    <?php
                                        if($this->lang == 'uk-UA' || !$service->title_ru)
                                            echo $service->title;
                                        else
                                            echo $service->title_ru;
                                    ?>
                                </div>
                                <div class="text">
                                    <?php
                                        if($this->lang == 'uk-UA' || !$service->description_ru)
                                            echo $service->description;
                                        else
                                            echo $service->description_ru;
                                    ?>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapEvents">
        <div class="container">
            <div class="events">
                <div class="h3">
                    <?php echo JText::_('BE_A_COURSE_OF_ALL_EVENTS'); ?>
                </div>
                <div class="eventDescription">
                    <?php echo JText::_('BE_A_COURSE_OF_ALL_EVENTS_TEXT'); ?>
                </div>
                <div class="wrapSocial">
                    <a href="http://<?php echo $this->params->get('facebook')?>">
                        <i class="fa fa-facebook socialIcon" aria-hidden="true"></i>
                    </a>
                    <a href="http://<?php echo $this->params->get('instagram')?>">
                        <i class="fa fa-instagram socialIcon" aria-hidden="true"></i>
                    </a>
                    <a href="http://<?php echo $this->params->get('youtube')?>">
                        <i class="fa fa-youtube socialIcon" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php if($this->gallery) :?>
        <div class="wrapGallery">
            <?php
                for($i=0; $i<10; $i++)
                {
                    if($i==0 || $i==5)
                        echo '<div class="gallery">';

                    echo '<img src="'.JUri::base().'images/gallery/'.$this->gallery[$i]->id_gallery.'/'.$this->gallery[$i]->file.'" alt="img">';

                    if($i==4 || $i==9)
                        echo '</div>';
                }
            ?>
        </div>
    <?php endif; ?>


    <div class="wrapSponsorsSlider">
        <div class="container">
            <div class="sponsorsSlider">
                <?php foreach ($this->partners as $partner) : ?>
                    <div class="slide">
                        <img src="<?= JUri::base().$partner->image ?>" alt="img">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div id="map" class="map"></div>

</div>
