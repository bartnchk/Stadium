<?php defined('_JEXEC') or exit(); ?>

<div class="stadiumPage">
    <!--  -->
    <div class="wrapPreview">
        <div class="overlayPreview"></div>
        <div class="preview">
            <div class="h2">
                Slavutich Arena
            </div>
            <div class="text">
                Let’s find out more about the stadium
            </div>
        </div>
    </div>
    <!--  -->
    <!--  -->
    <div class="wrapInfoBlock">
        <!--  -->
        <div class="container">
            <!--  -->
            <div class="info-block info-block--contacts">
                <div class="contacts-list">

                    <div class="info-block-label">
                        <span class="info-block-label__icon">
                            <span class="icon-paper-plane"></span>
                        </span>
                        <span class="info-block-label__title">List of contacts</span>
                    </div>

                    <div class="inner-conteiner">

                        <?php foreach ($this->contacts as $contact) : ?>
                            <dl class="info-block-list">
                                <dt class="info-block-list__title">
                                    <?= $contact->title ?>
                                    <dd class="info-block-list__name">
                                        <span class="icon-person"></span>
                                        <?= $contact->name ?>
                                    </dd>
                                    <dd class="info-block-list__tel">
                                        <span class="icon-phone_android"></span>
                                        <?= $contact->phone ?>
                                    </dd>
                                    <dd class="info-block-list__mail">
                                        <span class="icon-mail_outline"></span>
                                        <?= $contact->email ?>
                                    </dd>
                                </dt>
                            </dl>
                        <?php endforeach; ?>

                    </div>
                </div>
                <!--  -->
                <div class="admins-list">

                    <div class="info-block-label">
                        <span class="info-block-label__icon">
                            <span class="icon-people"></span>
                        </span>
                        <span class="info-block-label__title">Administration</span>
                    </div>

                    <div class="inner-conteiner">
                        <?php foreach ($this->administration as $item) : ?>
                            <dl class="info-block-list">
                                <dt class="info-block-list__title">
                                    <?= $item->title ?>
                                    <dd class="info-block-list__name">
                                        <?= $item->name ?>
                                    </dd>
                                </dt>
                            </dl>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
            <!--  -->
            <div class="two-info-blocks-wrapper two-info-blocks-wrapper--lbg">
                <!--  -->
                <div class="info-block info-block--presentation">

                    <div class="about-us-presentation">
                        <!--  -->
                        <div class="info-block-label">
                            <span class="info-block-label__icon">
                                <span class="icon-soccer-ball"></span>
                            </span>
                            <span class="info-block-label__title">Presentation</span>
                        </div>
                        <!--  -->
                        <div class="mobile-inner-conteiner">
                            <div class="presentation-title"><?= $this->presentation->title ?></div>
                            <p class="presentation-descr">
                                <?= $this->presentation->description ?>
                            </p>
                            <div class="info-block">
                                <p class="pres-social-wrap">
                                    <span class="icon-language"></span>
                                    <a class="presentation-soc-link" href="http://<?= $this->presentation->site ?>" target="_blank"><?= $this->presentation->site ?></a>
                                </p>
                            </div>
                            <div class="info-block">
                                <p class="pres-social-wrap">
                                    <span class="icon-location"></span>
                                    <span><?= $this->presentation->address ?></span>
                                </p>
                            </div>
                            <div class="info-block">
                                <div class="pres-social-wrap pres-soc-items-wrap">
                                    <div class="present-social-item">
                                        <span class="icon-facebookFA"></span>
                                        <a class="presentation-soc-link" href="<?= $this->presentation->facebook ?>" target="_blank"><?= $this->presentation->facebook ?></a>
                                    </div>

                                    <div class="present-social-item">
                                        <span class="icon-twitterFA"></span>
                                        <a class="presentation-soc-link" href="<?= $this->presentation->twitter ?>" target="_blank"><?= $this->presentation->twitter ?></a>
                                    </div>

                                    <div class="present-social-item">
                                        <span class="icon-instagramFA"></span>
                                        <a class="presentation-soc-link" href="<?= $this->presentation->instagram ?>" target="_blank"><?= $this->presentation->instagram ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  -->
                    </div>
                    <!--  -->
                </div>
                <!--  -->
                <div class="info-block achievements info-block--results">
                    <!--  -->
                    <div class="info-block-label info-block-label--long">
                        <span class="info-block-label__icon">
                            <span class="icon-trophy"></span>
                        </span>
                        <span class="info-block-label__title">
                            Fixtures & Results
                        <span class="info-block-label__title--small">Season <?= date('Y') ?>/<?= date('Y') + 1 ?></span>
                    </span>
                    </div>
                    <!--  -->
                    <div class="mobile-inner-conteiner">
                        <ul class="achievements-list">
                            Achievements
                            <?php foreach ($this->achievements as $item) : ?>
                                <li class="achievements-item">
                                    <?= $item ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <!--  -->
                </div>
                <!--  -->
            </div>
            <!--  -->

            <!-- Begin two-info-blocks-wrapper -->
            <div class="two-info-blocks-wrapper two-info-blocks-wrapper--rbg">
                <!--  -->
                <div class="info-block info-block-stadium-map">
                    <!--  -->
                    <div class="info-block-label">
                        <span class="info-block-label__icon">
                            <span class="icon-map"></span>
                        </span>
                        <span class="info-block-label__title">Stadium map</span>
                    </div>
                    <!--  -->
                    <div class="mobile-inner-conteiner--large">
                        <img class="stadium-map__img" src="/<?= $this->map->val ?>">
                    </div>
                </div>
                <!--  -->

                <div class="info-block info-block-stadium-photos">
                    <!--  -->
                    <div class="info-block-label">
                        <span class="info-block-label__icon">
                            <span class="icon-picture"></span>
                        </span>
                        <span class="info-block-label__title">Stadium photos</span>
                    </div>
                    <!--  -->
                    <div class="stadium-photos-wrapper">
                        <?php foreach ($this->photos as $photo) : ?>
                            <img class="stadium-photo-img" src="/images/landing/<?= $photo->src ?>" alt="photo">
                        <?php endforeach; ?>
                    </div>
                    <!--  -->
                </div>
                <!--  -->
            </div>
            <!-- End two-info-blocks-wrapper -->

            <!-- Begin two-info-blocks-wrapper -->
            <div class="two-info-blocks-wrapper two-info-blocks-wrapper--lbg-rules">

                <!-- Begin info-block -->
                <div class="info-block info-block--rules">
                    <!--  -->
                    <div class="info-block-label">
                        <span class="info-block-label__icon">
                            <span class="icon-directions"></span>
                        </span>
                        <span class="info-block-label__title">Behavior rules</span>
                    </div>
                    <!--  -->

                    <div class="mobile-inner-conteiner">
                        <?= $this->rules->val ?>
                    </div>

                </div>
                <!-- End info-block -->

                <!-- Begin info-block -->
                <div class="info-block info-block--distance">
                    <!--  -->
                    <div class="info-block-label info-block-label--long info-block-label--text">
                        <span class="info-block-label__icon">
                            <span class="icon-location-pin"></span>
                        </span>
                        <span class="info-block-label__title">
                            Distance
                            <span class="info-block-label__title--small">from the airport and the railway station</span>
                        </span>
                    </div>
                    <!--  -->

                    <div class="mobile-inner-conteiner">
                        <?php foreach ($this->points as $point) : ?>
                            <!-- Begin distance-item -->
                            <div class="distance-item">

                                <div class="distance-item__head-wrapper">
                                    <div class="distance-item__wrapper">
                                        <h5 class="distance-item__title">
                                            <?= $point->title ?>
                                        </h5>
                                        <span class="distance-item__icon">
                                            <span class=""><img src="/<?= $point->icon ?>" /></span>
                                        </span>
                                    </div>
                                    <p class="distance-item__descr">
                                        <?= $point->description ?>
                                    </p>
                                    <dl class="info-block-list">
                                        <dt class="info-block-list__title">
                                        <dd class="info-block-list__name">
                                            <span class="icon-location"></span>
                                            <?= $point->address ?>
                                        </dd>
                                        <dd class="info-block-list__tel">
                                            <span class="icon-phone_android"></span>
                                            <?= $point->phones ?>
                                        </dd>
                                        <dd class="info-block-list__mail">
                                            <span class="icon-mail_outline"></span>
                                            <?= $point->email ?>
                                        </dd>
                                        </dt>
                                    </dl>
                                </div>

                                <div class="distance-item__foot-wrapper">
                                    <img src="/<?= $point->map ?>" alt="map" class="distance-item__map">
                                </div>

                            </div>
                            <!-- End distance-item -->
                        <?php endforeach; ?>
                    </div>

                </div>
                <!-- End info-block -->

            </div>
            <!-- End two-info-blocks-wrapper -->

            <!-- Begin two-info-blocks-wrapper -->
            <div class="hotels-info-blocks-wrapper two-info-blocks-wrapper--rbg-hotels">
                <!--  -->
                <div class="info-block-label info-block-label--small info-block-label--absolute">
                    <span class="info-block-label__icon">
                        <span class="icon-android-home"></span>
                    </span>
                    <span class="info-block-label__title">Hotels</span>
                </div>
                <!--  -->
                <?php foreach ($this->hotels as $hotel) : ?>
                <!-- Begin info-block-hotels-->
                <div class="info-block info-block--hotels">
                    <img class="hotels__img" src="<?= $hotel->photo ?>" alt="hotel-photo">

                    <div class="hotels-card-wrapper">
                        <h4 class="hotels__title"><?= $hotel->title ?></h4>
                        <p class="hotels__descr">
                            <?= $hotel->description ?>
                        </p>
                        <dl class="info-block-list">
                            <dt class="info-block-list__title">
                            <dd class="info-block-list__name">
                                <span class="icon-location"></span>
                                <?= $hotel->address ?>
                            </dd>
                            <dd class="info-block-list__tel">
                                <span class="icon-phone_android"></span>
                                <?= $hotel->phone ?>
                            </dd>
                            <?php if($hotel->email) : ?>
                                <dd class="info-block-list__mail">
                                    <span class="icon-mail_outline"></span>
                                    <?= $hotel->email ?>
                                </dd>
                            <?php endif; ?>
                            </dt>
                        </dl>
                    </div>
                </div>
                <!-- End info-block-hotels-->
                <?php endforeach; ?>
            </div>
            <!-- End two-info-blocks-wrapper -->

            <!--  -->
            <div class="wrapBtn">
                <a href="https://en.zaporizhzhia.city/hotels" class="btn btn--offers" target="_blank">Go to all offers</a>
            </div>
            <!--  -->

            <!-- Begin info-block -->
            <div class="info-block info-block--sights">
                <!--  -->
                <div class="info-block-label info-block-label--small">
                    <span class="info-block-label__icon">
                        <span class="icon-emotsmile"></span>
                    </span>
                    <span class="info-block-label__title">Sights</span>
                </div>
                <!--  -->
                <div class="mobile-inner-conteiner">
                    <div class="row">
                        <?php foreach ($this->sights as $sight) : ?>
                            <!-- Begin sights-item -->
                            <div class="sights-item">
                                <img class="sights-item__img" src="<?= $sight->photo ?>">
                                <h4 class="sights-item__title"><?= $sight->title ?></h4>
                                <p class="sights-item__descr">
                                    <?= $sight->description ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
            <!-- End info-block -->

            <!--  -->
            <div class="wrapBtn">
                <a href="https://en.zaporizhzhia.city/attractions" class="btn btn--offers btn--bg" target="_blank">Go to all offers</a>
            </div>
            <!--  -->
        </div>
    </div>
</div>

