<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $modx->documentObject['description'] }}">
    {{--<meta name="author" content="AuCreative">--}}
    <meta name="keywords" content="{{ $modx->documentObject['keywords'] }}">

    <!-- Title Page-->
    <title>{{ $modx->documentObject['pagetitle'] }}</title>



{{--    {!! $modx->runSnippet('MinifyX', [
    'CSSfile' => 'theme/assets/vendor/bootstrap-4.1/bootstrap.min.css',
    'cssCompress' => '1',
    'outFolder' => 'assets/templates/',
    'outCSS' => 'prod.min.css',
    ]) !!}--}}

    <!-- Icons font CSS-->
    <link href="theme/assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="theme/assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="theme/assets/vendor/themify-font/themify-icons.css" rel="stylesheet" media="all">
    <!-- Base fonts of theme-->
    <link href="theme/assets/css/poppins-font.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->

    <!-- Bootstrap CSS-->
    <link href="theme/assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    {{--<link href="assets/templates/prod.min.css" rel="stylesheet" media="all">--}}

    <!-- Vendor CSS-->
    <link href="theme/assets/vendor/animate.css/animate.min.css" rel="stylesheet" media="all">
    <link href="theme/assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="theme/assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="theme/assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="theme/assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="theme/assets/vendor/revolution/css/layers.css" rel="stylesheet" />
    <link href="theme/assets/vendor/revolution/css/navigation.css" rel="stylesheet" />
    <link href="theme/assets/vendor/revolution/css/settings.css" rel="stylesheet" />

    <!-- Main CSS-->
    <link href="theme/assets/css/main.min.css" rel="stylesheet" media="all">
    <link href="theme/assets/rediz/css/main.css" rel="stylesheet">

    <!--Favicons-->
    <link rel="shortcut icon" href="theme/assets/rediz/img/logo_red.png">

</head>

<body class="animsition js-preloader">
<div class="page-wrapper">
    <!-- HEADER-->
    <header id="header">
        <div class="header-5 d-none d-lg-block">
            <div class="header__bar">
                <div class="wrap wrap--w1790">
                    <div class="container-fluid">
                        <div class="header__content">
                            <div class="logo">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="8.7 8.7 50 50">
                                        <path d="M47.8 44.6l10.8-10.8-25-25-17.7 17.8 3.9 3.9 13.9-13.9L51 33.9l-3.3 3.3-14-14.1L23 33.8l14 13.9-3.3 3.3-21.1-21.1-3.9 3.9 25 25L44.5 48l-7.2-7.2 3.3-3.3 7.2 7.1zm-14.1-7.5l-3.3-3.3 3.3-3.3 3.3 3.3-3.3 3.3z" fill="#fff"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="header-content-center">
                                <div class="container">
                                    <div class="row no-gutters">
                                        <div class="col-lg-4 col-12 header-contact-flex">
                                            <a class="header-contact" href="tel:{{ $modx->getConfig('client_phone') }}"><i class="zmdi zmdi-phone"></i> {{ $modx->getConfig('client_phone') }}</a>
                                        </div>
                                        <div class="col-lg-8 col-0 header-contact-menu">
                                            <nav class="header-content-center_main-menu">
                                                    {!! $modx->runSnippet('DLMenu',[
                                                        'parents' => '0',
                                                        'outerTpl' => '@CODE:<ul class="snip1135">[+wrap+]</ul>',
                                                        'rowTpl' => '@CODE:<li[+classes+]><a href="[+url+]" data-hover="[+title+]">[+title+]</a></li>',
                                                        'maxDepth' => '1',
                                                        'showParent' => '1',
                                                        'hereClass' => 'current'
                                                    ]) !!}
                                            </nav>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header__content-right">
                                <button class="hamburger hamburger--slider float-right hamburger--sm js-menusb-btn" type="button">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <aside class="menu-sidebar js-menusb" id="sidebar">
            <a class="btn-close" href="#" id="js-close-btn">
                <span class="ti-close"></span>
            </a>
            <div class="menu-sidebar__content">
                <nav class="menu-sidebar-nav-menu">
                    {!! $modx->runSnippet('DLMenu',[
                        'parents' => '0',
                        'outerTpl' => '@CODE:<ul class="menu nav-menu" id="nav-menu-sidebar">[+wrap+]</ul>',
                        'rowTpl' => '@CODE:<li[+classes+]><a href="[+url+]">[+title+]</a></li>',
                        'maxDepth' => '2',
                        'showParent' => '1',
                        'hereClass' => 'current'
                    ]) !!}
                </nav>
                <ul class="list-social list-social--big">
                    <li class="list-social__item">
                        <a class="ic-fb" href="{{ $modx->getConfig('client_facebook') }}">
                            <i class="zmdi zmdi-facebook"></i>
                        </a>
                    </li>
                    <li class="list-social__item">
                        <a class="ic-insta" href="{{ $modx->getConfig('client_instagram') }}">
                            <i class="zmdi zmdi-instagram"></i>
                        </a>
                    </li>
                    <li class="list-social__item">
                        <a class="ic-ytb" href="{{ $modx->getConfig('client_youtube') }}">
                            <i class="zmdi zmdi-youtube-play"></i>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="menu-sidebar__footer">
                <div class="copyright">
                    <p>{{ $modx->getConfig('client_copyright') }}</p>
                </div>
            </div>
        </aside>
        <div id="menu-sidebar-overlay"></div>
        <div class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile__bar-inner">
                        <a class="logo" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="8.7 8.7 50 50">
                                <path d="M47.8 44.6l10.8-10.8-25-25-17.7 17.8 3.9 3.9 13.9-13.9L51 33.9l-3.3 3.3-14-14.1L23 33.8l14 13.9-3.3 3.3-21.1-21.1-3.9 3.9 25 25L44.5 48l-7.2-7.2 3.3-3.3 7.2 7.1zm-14.1-7.5l-3.3-3.3 3.3-3.3 3.3 3.3-3.3 3.3z" fill="#8f0e0f"/>
                            </svg>
                        </a>
                        <button class="hamburger hamburger--slider float-right" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="header-nav-menu-mobile">
                <div class="container-fluid">
                    <ul class="menu nav-menu menu-mobile">
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Главная</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="#1">Item 1</a></li>
                                <li class="menu-item"><a href="#2">Item 2</a></li>
                                <li class="menu-item"><a href="#3">Item 3</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="#">О нас</a></li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Услуги</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="#1">Service 1</a></li>
                                <li class="menu-item"><a href="#2">Service 2</a></li>
                                <li class="menu-item"><a href="#3">Service 3</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="#">Комплектация интерера</a></li>
                        <li class="menu-item"><a href="#">Портфолио</a></li>
                        <li class="menu-item"><a href="#">Дизайнерам архитекторам</a></li>
                        <li class="menu-item"><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- END HEADER-->

    <!-- MAIN-->
    <main id="main">
        <!-- SLIDER-->
        <section class="section">

            <div class="page-info-2">
                <div class="wrap wrap--w1790">
                    <div class="container-fluid">
                        <div class="page-info__inner">
                            <ul class="list-social list-social-2 list-social--ver">
                                <li class="list-social__item">
                                    <a class="ic-fb" href="{{ $modx->getConfig('client_facebook') }}">
                                        <i class="zmdi zmdi-facebook"></i>
                                    </a>
                                </li>
                                <!--.-->
                                <li class="list-social__item">
                                    <a class="ic-insta" href="{{ $modx->getConfig('client_instagram') }}">
                                        <i class="zmdi zmdi-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-social__item">
                                    <a class="ic-ytb" href="{{ $modx->getConfig('client_youtube') }}">
                                        <i class="zmdi zmdi-youtube-play"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="copyright">{{ $modx->getConfig('client_copyright') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="section">

                    <!-- PAGE LINE-->
                    <div class="page-line__item page-line__item-1"></div>
                    <div class="page-line__item page-line__item-2"></div>
                    <div class="page-line__item page-line__item-3"></div>
                    <div class="page-line__item page-line__item-4"></div>
                    <!-- END PAGE LINE-->
                    <div class="rev_slider_wrapper">
                        <div class="rev_slider fullwidthabanner js-rev"
                             data-version="5.4.4"
                             style="display:none"
                             data-rev-layout="fullscreen"
                             data-rev-arrows="false"
                             data-rev-bullets="true"
                             data-rev-stylebullet="persephone"
                             data-rev-variable="false"
                             data-rev-voffbullet="40"
                             data-rev-spacebullet="30">
                            <ul>
                                {{--data-transition="slotzoom-horizontal"--}}
                                <li class="rev-item rev-item-1" data-transition="3dcurtain-vertical" data-param1="">
                                    <img class="rev-slidebg" src="theme/assets/rediz/img/main-slider-1.jpg" alt="HOMEARTIDEA"
                                         data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" />
                                    <h2 class="tp-caption tp-resizeme rev-text-1"
                                        data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                        data-x="[left]"
                                        data-y="[center]"
                                        data-hoffset="[400, 200, 150, 100, 20]"
                                        data-voffset="-120"
                                        data-width="['100%']"
                                        data-height="['auto']"
                                        data-lineheight="[54]"
                                        data-whitespace="[nowrap, nowrap, normal, normal, normal]"
                                        data-color="#fff"
                                        data-fontweight="800"
                                        data-fontsize="[48, 46, 42, 38, 34]"
                                        data-textalign="[left]"
                                        data-basealign="slide">HOMEARTIDEA<br>Cтудия дизайна интерьера</h2>
                                    <h4 class="tp-caption tp-resizeme rev-text-2"
                                        data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                        data-x="[left]"
                                        data-y="[center]"
                                        data-hoffset="[400, 200, 150, 100, 20]"
                                        data-voffset="[-20, 0]"
                                        data-width="['100%']"
                                        data-height="['auto']"
                                        data-whitespace="[nowrap, nowrap, normal, normal, normal]"
                                        data-color="#fff"
                                        data-fontweight="400"
                                        data-fontsize="[20]"
                                        data-textalign="[left]"
                                        data-basealign="slide">Проектируем интерьеры любой сложности</h4>
                                    <a class="tp-caption tp-resizeme" href="#" target="_self"
                                       data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                       data-x="[left]"
                                       data-y="[center]"
                                       data-hoffset="[400, 200, 150, 100, 20]"
                                       data-voffset="150"
                                       data-width="['auto']"
                                       data-height="['auto']"
                                       data-responsive_offset="on"
                                       data-responsive="off"
                                       data-textalign="[left]"
                                       data-whitespace="[nowrap]"
                                       data-basealign="slide">
                                            <span class="rev-btn-1">Перейти в проекты
                                                <span class="arrow" data-paddingleft="5">
                                                    <i class="zmdi zmdi-arrow-right"></i>
                                                </span>
                                            </span>
                                    </a>
                                </li>

                                <li class="rev-item rev-item-2" data-transition="3dcurtain-vertical" data-param1="">
                                    <img class="rev-slidebg" src="theme/assets/rediz/img/main-slider-2.jpg" alt="Комплектация интерьера под Ваш бюджет"
                                         data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" />
                                    <h2 class="tp-caption tp-resizeme rev-text-1"
                                        data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                        data-x="[left]"
                                        data-y="[center]"
                                        data-hoffset="[400, 200, 150, 100, 20]"
                                        data-voffset="-120"
                                        data-width="['100%']"
                                        data-height="['auto']"
                                        data-lineheight="[54]"
                                        data-whitespace="[nowrap, nowrap, normal, normal, normal]"
                                        data-color="#fff"
                                        data-fontweight="800"
                                        data-fontsize="[48, 46, 42, 38, 34]"
                                        data-textalign="[left]"
                                        data-basealign="slide">КОМПЛЕКТАЦИЯ ИНТЕРЬЕРА <br>под ваш бюджет</h2>
                                    <h4 class="tp-caption tp-resizeme rev-text-2"
                                        data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                        data-x="[left]"
                                        data-y="[center]"
                                        data-hoffset="[400, 200, 150, 100, 20]"
                                        data-voffset="[-20, 0]"
                                        data-width="['100%']"
                                        data-height="['auto']"
                                        data-whitespace="[nowrap, nowrap, normal, normal, normal]"
                                        data-color="#fff"
                                        data-fontweight="400"
                                        data-fontsize="[20]"
                                        data-textalign="[left]"
                                        data-basealign="slide">Выгодные предложения, широкий ассортимент, высокое качество</h4>
                                    <a class="tp-caption tp-resizeme" href="#" target="_self"
                                       data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                       data-x="[left]"
                                       data-y="[center]"
                                       data-hoffset="[400, 200, 150, 100, 20]"
                                       data-voffset="150"
                                       data-width="['auto']"
                                       data-height="['auto']"
                                       data-responsive_offset="on"
                                       data-responsive="off"
                                       data-textalign="[left]"
                                       data-whitespace="[nowrap]"
                                       data-basealign="slide">
                                            <span class="rev-btn-1">Посмотреть каталоги
                                                <span class="arrow" data-paddingleft="5">
                                                    <i class="zmdi zmdi-arrow-right"></i>
                                                </span>
                                            </span>
                                    </a>
                                </li>

                                <li class="rev-item rev-item-3" data-transition="3dcurtain-vertical" data-param1="">
                                    <img class="rev-slidebg" src="theme/assets/rediz/img/main-slider-3.jpg" alt="3"
                                         data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" />
                                    <h2 class="tp-caption tp-resizeme rev-text-1"
                                        data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                        data-x="[left]"
                                        data-y="[center]"
                                        data-hoffset="[400, 200, 150, 100, 20]"
                                        data-voffset="-120"
                                        data-width="['100%']"
                                        data-height="['auto']"
                                        data-lineheight="[54]"
                                        data-whitespace="[nowrap, nowrap, normal, normal, normal]"
                                        data-color="#fff"
                                        data-fontweight="800"
                                        data-fontsize="[48, 46, 42, 38, 34]"
                                        data-textalign="[left]"
                                        data-basealign="slide">МЕБЕЛЬНОЕ АТАЛЬЕ <br>мебель по эскизам в нашей мастерской</h2>
                                    <h4 class="tp-caption tp-resizeme rev-text-2"
                                        data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                        data-x="[left]"
                                        data-y="[center]"
                                        data-hoffset="[400, 200, 150, 100, 20]"
                                        data-voffset="[-20, 0]"
                                        data-width="['100%']"
                                        data-height="['auto']"
                                        data-whitespace="[nowrap, nowrap, normal, normal, normal]"
                                        data-color="#fff"
                                        data-fontweight="400"
                                        data-fontsize="[20]"
                                        data-textalign="[left]"
                                        data-basealign="slide">Мебель европейского качества из России</h4>
                                    <a class="tp-caption tp-resizeme" href="#" target="_self"
                                       data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                       data-x="[left]"
                                       data-y="[center]"
                                       data-hoffset="[400, 200, 150, 100, 20]"
                                       data-voffset="150"
                                       data-width="['auto']"
                                       data-height="['auto']"
                                       data-responsive_offset="on"
                                       data-responsive="off"
                                       data-textalign="[left]"
                                       data-whitespace="[nowrap]"
                                       data-basealign="slide">
                                            <span class="rev-btn-1">Узнать больше
                                                <span class="arrow" data-paddingleft="5">
                                                    <i class="zmdi zmdi-arrow-right"></i>
                                                </span>
                                            </span>
                                    </a>
                                </li>

                                <li class="rev-item rev-item-4" data-transition="3dcurtain-vertical" data-param1="">
                                    <img class="rev-slidebg" src="theme/assets/rediz/img/main-slider-4.jpg" alt="4"
                                         data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" />
                                    <h2 class="tp-caption tp-resizeme rev-text-1"
                                        data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                        data-x="[left]"
                                        data-y="[center]"
                                        data-hoffset="[400, 200, 150, 100, 20, 20]"
                                        data-voffset="-120"
                                        data-width="['100%']"
                                        data-height="['auto']"
                                        data-lineheight="[54]"
                                        data-whitespace="[nowrap, nowrap, nowrap, nowrap, normal]"
                                        data-color="#fff"
                                        data-fontweight="800"
                                        data-fontsize="[48, 46, 42, 38, 34]"
                                        data-textalign="[left]"
                                        data-basealign="slide">ГАРАНТИЯ КАЧЕСТВА<br>от старта до завершения проекта</h2>
                                    <h4 class="tp-caption tp-resizeme rev-text-2"
                                        data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                        data-x="[left]"
                                        data-y="[center]"
                                        data-hoffset="[400, 200, 150, 100, 20]"
                                        data-voffset="[-20, 0]"
                                        data-width="['100%']"
                                        data-height="['auto']"
                                        data-whitespace="[nowrap, nowrap, nowrap, nowrap, normal]"
                                        data-color="#fff"
                                        data-fontweight="400"
                                        data-fontsize="[20]"
                                        data-textalign="[left]"
                                        data-basealign="slide">Берем на себя всю технически сложную,<br>
                                        требующую специальных знаний и навыков работу!</h4>
                                    <a class="tp-caption tp-resizeme" href="#" target="_self"
                                       data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                       data-x="[left]"
                                       data-y="[center]"
                                       data-hoffset="[400, 200, 150, 100, 20]"
                                       data-voffset="150"
                                       data-width="['auto']"
                                       data-height="['auto']"
                                       data-responsive_offset="on"
                                       data-responsive="off"
                                       data-textalign="[left]"
                                       data-whitespace="[nowrap]"
                                       data-basealign="slide">
                                            <span class="rev-btn-1">Узнать больше
                                                <span class="arrow" data-paddingleft="5">
                                                    <i class="zmdi zmdi-arrow-right"></i>
                                                </span>
                                            </span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SLIDER-->
    </main>
    <!-- END MAIN-->
</div>

<!-- Jquery JS-->
<script src="theme/assets/vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap JS-->
<script src="theme/assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS-->
<script src="theme/assets/vendor/animsition/animsition.min.js"></script>
<script src="theme/assets/vendor/slick/slick.min.js"></script>
<script src="theme/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="theme/assets/vendor/wow/wow.min.js"></script>
<script src="theme/assets/vendor/jquery.counterup/jquery.counterup.min.js"></script>
<script src="theme/assets/vendor/isotope/isotope.pkgd.min.js"></script>
<script src="theme/assets/vendor/isotope/imagesloaded.pkgd.min.js"></script>
<script src="theme/assets/vendor/matchHeight/jquery.matchHeight-min.js"></script>
<script src="theme/assets/vendor/select2/select2.min.js"></script>
<script src="theme/assets/vendor/sweetalert/sweetalert.min.js"></script>
<script src="theme/assets/vendor/noUiSlider/nouislider.min.js"></script>
<script type="text/javascript" src="theme/assets/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="theme/assets/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!--
| (Load Extensions only on Local File Systems !
| The following part can be removed on Server for On Demand Loading)
-->
<script type="text/javascript" src="theme/assets/vendor/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="theme/assets/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="theme/assets/vendor/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="theme/assets/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="theme/assets/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="theme/assets/vendor/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="theme/assets/vendor/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="theme/assets/vendor/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="theme/assets/vendor/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<!-- Config Revolution Slider-->
<script type="text/javascript" src="theme/assets/js/config-revolution.min.js"></script>

<!-- Main JS-->
<script src="theme/assets/js/global.js"></script>

</body>

</html>
<!-- end document-->