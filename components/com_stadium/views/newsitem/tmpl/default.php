<?php

defined('_JEXEC') or exit();

$ua_months = [
    '01' => 'Січня',
    '02' => 'Лютого',
    '03' => 'Березня',
    '04' => 'Квитня',
    '05' => 'Травня',
    '06' => 'Червня',
    '07' => 'Липня',
    '08' => 'Серпня',
    '09' => 'Вересня',
    '10' => 'Жовтня',
    '11' => 'Листопада',
    '12' => 'Грудня'
];

$ru_months = [
    '01' => 'Января',
    '02' => 'Февраля',
    '03' => 'Марта',
    '04' => 'Апреля',
    '05' => 'Мая',
    '06' => 'Июня',
    '07' => 'Июля',
    '08' => 'Августа',
    '09' => 'Сентября',
    '10' => 'Октября',
    '11' => 'Ноября',
    '12' => 'Декабря'
];

?>
<div class="pageNewsPage">
    <div class="wrapperParts">
        <div class="partLeft">
            <div class="h2">
                <?php
                    if($this->lang == 'uk-UA' || !$this->item->title_ru)
                    {
                        echo $this->item->title;
                    }
                    else
                    {
                        echo $this->item->title_ru;
                    }
                ?>
            </div>

            <div class="wrapImg">
                <img src="<?= JUri::base() . $this->item->background ?>" alt="img">
                <div class="wrapBgc">
                    <div class="container">
                        <div class="dateBlock">
                            <div class="label">
                                <?= $this->item->category_title ?>
                            </div>
                            <div class="date">
                                <?php
                                    $timestamp = strtotime($this->item->date);
                                    echo date('d', $timestamp) . ' ' . $ua_months[date('m', $timestamp)] . ' ' . date('Y', $timestamp);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrapText">
                <div class="container">
                    <div class="text">
                        <?= $this->item->description ?>
                    </div>
                </div>
            </div>

            <?php if($this->item->image) : ?>
            <div class="wrapImgBlock">
                <img src="<?= JUri::base() . $this->item->image ?>" alt="img">
            </div>
            <?php endif ?>


            <?php if($this->item->video) : ?>
            <div class="wrapVideo">
                <div class="heightVideo">
                    <?= $this->item->video ?>
                </div>
            </div>
            <?php endif; ?>

        </div>

        <div class="partRight">
            <div class="breakingNews">
                <div class="h2">
                    Останні новини
                </div>

                <div class="wrapArticles">
                    <?php
                        foreach($this->news as $newsitem)
                        {
                            echo '<div class="article">';
                            echo    '<div class="articleHeader">';
                            echo        '<div class="date">';
                                            $timestamp = strtotime($newsitem->date);
                            echo            date('d',$timestamp) . ' ' . $ua_months[date('m',$timestamp)] . ' ' . date('Y',$timestamp);
                            echo        '</div>';
                            echo        '<div class="label">';
                            echo            $newsitem->category_title;
                            echo        '</div>';
                            echo    '</div>';
                            echo    '<div class="h4">';
                            if($this->lang == 'uk-UA' || !$newsitem->title_ru)
                            {
                                echo $newsitem->title;
                            }
                            else
                            {
                                echo $newsitem->title_ru;
                            }
                            echo    '</div>';
                            echo    '<div class="articleText">';

                            if($this->lang == 'uk-UA' || !$newsitem->description_ru)
                            {
                                $description = strip_tags($newsitem->description);

                                if (mb_strlen($description) > 180)
                                    $description = mb_substr($description, 0, 180) . '...';

                                echo $description;
                            }
                            else
                            {
                                $description = strip_tags($newsitem->description_ru);

                                if (mb_strlen($description) > 180)
                                    $description = mb_substr($description, 0, 180) . '...';

                                echo $description;
                            }
                            echo    '</div>';
                            echo    '<a class="readIt" href="' .JRoute::_('index.php') .'/'. $newsitem->alias . '">';
                            echo        'Читати';
                            echo    '</a>';
                            echo '</div>';
                        }
                    ?>
                </div>

                <div class="writeToUs">
                    <div class="h2">
                        Напишіть нам
                    </div>

                    <form class="writeUs">
                        <div class="wrapInputs">

                            <div class="wrapInput">
                                <input id="name" name="name" type="text" class="input" placeholder="Ваше ім’я" required>
                            </div>

                            <div class="wrapInput">
                                <input id="email" name="email" type="text" class="input" placeholder="Email" required>
                            </div>

                            <div class="wrapInput">
                                <textarea id="message" name="message" class="input" placeholder="Ваше повідомлення" required></textarea>
                            </div>

                        </div>

                        <div class="wrapBtn">
                            <button id="submit" type="submit" class="btn">
                                Відправити
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function() {

        jQuery("#submit").click(function(){

            var name    = jQuery('#name').val();
            var email   = jQuery('#email').val();
            var message = jQuery('#message').val();

            if (!name || !email || !message)
            {
                alert('Пожалуйста, заполните все поля формы.');
                return false;
            }

            jQuery.ajax({
                type: "POST",
                url: "<?php echo JURI::base(); ?>components/com_stadium/assets/ajax.php",
                data: "name="+name+"&email="+email+"&message="+message,
                success: function(result)
                {
                    jQuery('#name').val('');
                    jQuery('#email').val('');
                    jQuery('#message').val('');

                    alert(result);
                }
            });

            return false;
        });
    })
</script>