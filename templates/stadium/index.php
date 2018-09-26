<?php

    defined('_JEXEC') or die();

    $doc = JFactory::getDocument();

    $doc->addStyleSheet(JUri::base() . '/templates/' . $doc->template . '/node_modules/slick-carousel/slick/slick.css');
    $doc->addStyleSheet(JUri::base() . '/templates/' . $doc->template . '/style/main.min.css?v1');

    $doc->addScript('https://use.fontawesome.com/ba92e05d02.js');
    $doc->addScript(JUri::base() . '/templates/' . $doc->template . '/node_modules/jquery/dist/jquery.min.js');
    $doc->addScript('https://maps.googleapis.com/maps/api/js?key=AIzaSyDSOaGXfnw9or4dDUxIRW_bjSZxqk-irhM&');
    $doc->addScript('https://cdn.rawgit.com/googlemaps/v3-utility-library/master/markerwithlabel/src/markerwithlabel.js');
    $doc->addScript(JUri::base() . '/templates/' . $doc->template . '/node_modules/slick-carousel/slick/slick.min.js');
    $doc->addScript(JUri::base() . '/templates/' . $doc->template . '/js/index.min.js');

    $lang = JFactory::getLanguage()->getTag();
?>

<!DOCTYPE html>
<html xmlns:jdoc="http://www.w3.org/1999/XSL/Transform">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <jdoc:include type="head" />

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114349501-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-114349501-3');
    </script>
    
</head>

<body>

<div class="wrapLoader">
    <div class="cssload-container">
        <div class="cssload-loading"><i></i><i></i></div>
    </div>
</div>

<div class="wrapper">

    <div class="content">

        <header class="header">
            <div class="container">
                <div class="headerContainer">
                    <div class="headerContent">
                        <a class="aHeaderLogo" href="<?= JUri::base() ?>"><img class="headerLogoImg" src="<?= JUri::base()?>/templates/stadium/img/logo_ftr.png" alt="headerLogo"></img></a>
                        <div class="burger">
                            <div class="burgerLine"></div>
                            <div class="burgerLine"></div>
                            <div class="burgerLine"></div>
                        </div>

                        <div class="headerMenu">
                            <div class="searchBlock">
                                <div class="searchAndLanguage">
                                    <div class="languages">
                                        <?php
                                        if($lang == 'uk-UA')
                                        {
                                            $path = str_replace( '/uk/', '/ru/', JUri::current() );
                                            echo '<a href="' . JUri::current() . 'uk" class="searchAndLanguageItem whiteText language">укр</a>';
                                            echo '<a href="' . $path . '" class="searchAndLanguageItem whiteText language hidden">рус</a>';
                                        }
                                        elseif($lang == 'ru-RU')
                                        {
                                            $path = str_replace( '/ru/', '/uk/', JUri::current() );
                                            echo '<a href="' . $path . '" class="searchAndLanguageItem whiteText language hidden">укр</a>';
                                            echo '<a href="' . JUri::current() . 'ru" class="searchAndLanguageItem whiteText language">рус</a>';
                                        }
                                        ?>
                                    </div>
                                    <div class="searchAndLanguageItem whiteText search">
                                        <svg class="searchSvg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 250.313 250.313" style="enable-background:new 0 0 250.313 250.313;" xml:space="preserve">
                                    <g id="Search">
                                        <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M244.186,214.604l-54.379-54.378c-0.289-0.289-0.628-0.491-0.93-0.76
                                        c10.7-16.231,16.945-35.66,16.945-56.554C205.822,46.075,159.747,0,102.911,0S0,46.075,0,102.911
                                        c0,56.835,46.074,102.911,102.91,102.911c20.895,0,40.323-6.245,56.554-16.945c0.269,0.301,0.47,0.64,0.759,0.929l54.38,54.38
                                        c8.169,8.168,21.413,8.168,29.583,0C252.354,236.017,252.354,222.773,244.186,214.604z M102.911,170.146
                                        c-37.134,0-67.236-30.102-67.236-67.235c0-37.134,30.103-67.236,67.236-67.236c37.132,0,67.235,30.103,67.235,67.236
                                        C170.146,140.044,140.043,170.146,102.911,170.146z"/>
                                    </g>
                                </svg>
                                    </div>
                                </div>
                                <form id="form" action="<?= JRoute::_('index.php?Itemid=118') ?>" class="searchingForm" method="post">
                                    <div class="searchingFormWrap">
                                        <div class="submitSearch">
                                            <svg class="searchSvg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 250.313 250.313" style="enable-background:new 0 0 250.313 250.313;" xml:space="preserve">
                                        <g id="Search">
                                            <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M244.186,214.604l-54.379-54.378c-0.289-0.289-0.628-0.491-0.93-0.76
                                            c10.7-16.231,16.945-35.66,16.945-56.554C205.822,46.075,159.747,0,102.911,0S0,46.075,0,102.911
                                            c0,56.835,46.074,102.911,102.91,102.911c20.895,0,40.323-6.245,56.554-16.945c0.269,0.301,0.47,0.64,0.759,0.929l54.38,54.38
                                            c8.169,8.168,21.413,8.168,29.583,0C252.354,236.017,252.354,222.773,244.186,214.604z M102.911,170.146
                                            c-37.134,0-67.236-30.102-67.236-67.235c0-37.134,30.103-67.236,67.236-67.236c37.132,0,67.235,30.103,67.235,67.236
                                            C170.146,140.044,140.043,170.146,102.911,170.146z"/>
                                        </g>
                                    </svg>
                                        </div>
                                        <input id="searchfield" type="text" name="searchit" class="searchQuery" autofocus>
                                        <div class="closeSearch">
                                            <svg class="closeSvg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 212.982 212.982" style="enable-background:new 0 0 212.982 212.982;" xml:space="preserve">
                                        <g id="Close">
                                            <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312
                                            c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312
                                            l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937
                                            c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                        </g>
                                    </svg>
                                        </div>
                                    </div>
                                </form>
                                <div class="closeMenu">
                                    <svg class="closeSvg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 212.982 212.982" style="enable-background:new 0 0 212.982 212.982;" xml:space="preserve">
                                <g id="Close">
                                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312
                                    c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312
                                    l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937
                                    c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                </g>
                            </svg>
                                </div>
                            </div>
                            <div class="menuBlock">
                                <jdoc:include type="modules" name="topmenu" />
                            </div>
                            <div class="socialBlock">
                                <div class="socialCaption">ми у соцмережах</div>
                                <div class="wrapSocial">
                                    <a href="http://">
                                        <i class="fa fa-facebook socialIcon lightBlueIconOnWhiteBgc" aria-hidden="true"></i>
                                    </a>
                                    <a href="http://">
                                        <i class="fa fa-instagram socialIcon lightBlueIconOnWhiteBgc" aria-hidden="true"></i>
                                    </a>
                                    <a href="http://">
                                        <i class="fa fa-youtube socialIcon lightBlueIconOnWhiteBgc" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <button class="upBtn">
            <i class="fa fa-angle-up"></i>
        </button>

        <jdoc:include type="component" />


    </div>

    <jdoc:include type="modules" name="footer" />

</div>

</body>

</html>