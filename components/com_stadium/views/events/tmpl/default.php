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

<div class="eventsPage">
    <div class="eventsContent">
        <div class="container">
            <h2 class="h2">
                <?= JText::_('EVENTS') ?>
            </h2>
            <div class="wrapItems">
                <?php foreach($this->items as $item) : ?>
                <div class="event-item">
                    <?php $src = JUri::base() . $item->image; ?>
                    <div class="newsImg" style="background-image: url('<?= $src ?>')">
                        <img src="<?= $src ?>" alt="img">
                    </div>

                    <div class="itemBottom">
                        <div class="top">
                            <div class="textBlock">
                                <div class="h4">
                                    <?php if ($this->lang == 'uk-UA' || !$item->title_ru) {
                                        echo $item->title;
                                    } else {
                                        echo $item->title_ru;
                                    } ?>
                                </div>
                                <div class="newsText">
                                    <?php if ($this->lang == 'uk-UA' || !$item->description_ru) {
                                        echo $item->description;
                                    } else {
                                        echo $item->description_ru;
                                    } ?>
                                </div>
                            </div>
                            <?php if($item->is_free) : ?>
                            <div class="price">
                                <?= JText::_('TICKET_PRICE') . ': ' . $item->price . ' грн'; ?>
                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="bottom">
                            <div class="wrapDateTime">
                                <div class="date">
                                    <?php if ($this->lang == 'uk-UA') {
                                        echo date('d', strtotime($item->date)) . '<span class="month">' . $ua_months[date('m', strtotime($item->date))] . '</span>';
                                    } else {
                                        echo date('d', strtotime($item->date)) . '<span class="month">' . $ru_months[date('m', strtotime($item->date))] . '</span>';
                                    } ?>
                                </div>
                                <div class="time">
                                    <?= $item->time ?>
                                </div>
                            </div>
                            <div class="wrapBtn<?= ($item->is_free) ? '' : ' free' ?>">
                                <?php $link = str_replace('http://', '', $item->link) ?>
                                <?php if ($item->link && $item->is_free) { ?>
                                    <a class="btn" href="http://<?= $link ?>" target="_blanc">
                                        <?= JText::_('TICKET_BUY') ?>
                                    </a>
                                <?php } else if($item->link) { ?>
                                    <span class="btn"><?= JText::_('FREE') ?></span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
