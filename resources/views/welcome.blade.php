<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SMARTWORLD') }}</title>

    <link href="favicon.png" type="image/x-icon" rel="shortcut icon">
    <link href="/css/master.css" rel="stylesheet">

    <script src="/plugins/jquery/jquery-1.11.3.min.js"></script>
    <script src="/js/modernizr.custom.js"></script>
</head>


<body>

<!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end -->


<div class="layout-theme animated-css" data-header="sticky" data-header-top="200">


    <!-- HEADER -->

    <div class="container">
        @include('include.header')
    </div>
    <!-- end container-->


    <div class="main-slider slider-pro wow" id="my-slider"
         data-slider-width="1600"
         data-slider-height="850">

        <div class="sp-slides">

            <!-- Slide 1 -->
            <div class="sp-slide">
                <img class="sp-image img-responsive" src="/media/main-slider/1.jpg" alt="slider">

                <div class="sp-layer main-slider__title hidden-xs"
                     data-horizontal="0"
                     data-vertical="36%"
                     data-width="100%"
                     data-show-transition="left"
                     data-hide-transition="right"
                     data-show-duration="800"
                     data-show-delay="400"
                     data-hide-delay="400">
                    <div class="container">
                        Nous fournissons la plus haute qualit&eacute;
                    </div>
                </div>

                <div class="sp-layer"
                     data-horizontal="0"
                     data-vertical="43%"
                     data-width="100%"
                     data-show-transition="right"
                     data-hide-transition="left"
                     data-show-duration="800"
                     data-show-delay="1000"
                     data-hide-delay="400">
                    <div class="container">
                        <div class="main-slider__subtitle">MARKETING DIGITAL</div>
                        <div class="decor-2 decor-2_mod-a decor-2_mod_white"></div>
                    </div>
                </div>

                <div class="sp-layer main-slider__text"
                     data-horizontal="0"
                     data-vertical="55%"
                     data-width="100%"
                     data-height="30%"
                     data-show-transition="up"
                     data-hide-transition="buttom"
                     data-show-duration="800"
                     data-show-delay="2000"
                     data-hide-delay="1200">
                    <div class="container">
                        <p class="hidden-xs">Sites web ou site de e-commerce & robot de fidelisation clien</p>
                        <a class="btn btn_mod-b btn-effect" href="home.html"><span
                                    class="btn__inner">Lire plus...</span></a>
                    </div>
                </div>
            </div>
            <!-- end sp-slide -->

            <!-- Slide 2 -->
            <div class="sp-slide">
                <img class="sp-image img-responsive" src="/media/main-slider/1.jpg" alt="slider">

                <div class="sp-layer main-slider__title hidden-xs"
                     data-horizontal="0"
                     data-vertical="36%"
                     data-width="100%"
                     data-show-transition="left"
                     data-hide-transition="right"
                     data-show-duration="800"
                     data-show-delay="400"
                     data-hide-delay="400">
                    <div class="container">
                        Vendez encore plus de produits et services
                    </div>
                </div>

                <div class="sp-layer"
                     data-horizontal="0"
                     data-vertical="43%"
                     data-width="100%"
                     data-show-transition="right"
                     data-hide-transition="left"
                     data-show-duration="800"
                     data-show-delay="1000"
                     data-hide-delay="400">
                    <div class="container">
                        <div class="main-slider__subtitle">Des services de SMS Marketing</div>
                        <div class="decor-2 decor-2_mod-a decor-2_mod_white"></div>
                    </div>
                </div>

                <div class="sp-layer main-slider__text"
                     data-horizontal="0"
                     data-vertical="55%"
                     data-width="100%"
                     data-height="30%"
                     data-show-transition="up"
                     data-hide-transition="buttom"
                     data-show-duration="800"
                     data-show-delay="2000"
                     data-hide-delay="1200">
                    <div class="container">
                        <p class="hidden-xs">Outils de gestion de la relation client a base des sms</p>
                        <a class="btn btn_mod-b btn-effect" href="home.html"><span
                                    class="btn__inner">Lire plus...</span></a>
                    </div>
                </div>
            </div>
            <!-- end sp-slide -->

            <!-- Slide 3 -->
            <div class="sp-slide">
                <img class="sp-image img-responsive" src="/media/main-slider/1.jpg" alt="slider">

                <div class="sp-layer main-slider__title hidden-xs"
                     data-horizontal="0"
                     data-vertical="36%"
                     data-width="100%"
                     data-show-transition="left"
                     data-hide-transition="right"
                     data-show-duration="800"
                     data-show-delay="400"
                     data-hide-delay="400">
                    <div class="container">
                        Accompagnement Technique & e-marketing

                    </div>
                </div>

                <div class="sp-layer"
                     data-horizontal="0"
                     data-vertical="43%"
                     data-width="100%"
                     data-show-transition="right"
                     data-hide-transition="left"
                     data-show-duration="800"
                     data-show-delay="1000"
                     data-hide-delay="400">
                    <div class="container">
                        <div class="main-slider__subtitle"> B&acirc;tissez une marque forte</div>
                        <div class="decor-2 decor-2_mod-a decor-2_mod_white"></div>
                    </div>
                </div>

                <div class="sp-layer main-slider__text"
                     data-horizontal="0"
                     data-vertical="55%"
                     data-width="100%"
                     data-height="30%"
                     data-show-transition="up"
                     data-hide-transition="buttom"
                     data-show-duration="800"
                     data-show-delay="2000"
                     data-hide-delay="1200">
                    <div class="container">
                        <p class="hidden-xs">Pages dynamiques et professionnelles sur les reseaux sociaux</p>
                        <a class="btn btn_mod-b btn-effect" href="home.html"><span
                                    class="btn__inner">Lire plus...</span></a>
                    </div>
                </div>
            </div>
            <!-- end sp-slide -->

            <!-- Slide 4 -->
            <div class="sp-slide">
                <img class="sp-image img-responsive" src="/media/main-slider/1.jpg" alt="slider">

                <div class="sp-layer main-slider__title hidden-xs"
                     data-horizontal="0"
                     data-vertical="36%"
                     data-width="100%"
                     data-show-transition="left"
                     data-hide-transition="right"
                     data-show-duration="800"
                     data-show-delay="400"
                     data-hide-delay="400">
                    <div class="container">
                       Doublez votre chiffre d'affaire avec une solution pratique
                    </div>
                </div>

                <div class="sp-layer"
                     data-horizontal="0"
                     data-vertical="43%"
                     data-width="100%"
                     data-show-transition="right"
                     data-hide-transition="left"
                     data-show-duration="800"
                     data-show-delay="1000"
                     data-hide-delay="400">
                    <div class="container">
                        <div class="main-slider__subtitle"> Smart Solutions</div>
                        <div class="decor-2 decor-2_mod-a decor-2_mod_white"></div>
                    </div>
                </div>

                <div class="sp-layer main-slider__text"
                     data-horizontal="0"
                     data-vertical="55%"
                     data-width="100%"
                     data-height="30%"
                     data-show-transition="up"
                     data-hide-transition="buttom"
                     data-show-duration="800"
                     data-show-delay="2000"
                     data-hide-delay="1200">
                    <div class="container">
                        <p class="hidden-xs">La solution sur mesure, pratique et adapt&eacute; pour vore transformation digitale </p>
                        <a class="btn btn_mod-b btn-effect" href="home.html"><span
                                    class="btn__inner">Lire plus...</span></a>
                    </div>
                </div>
            </div>
            <!-- end sp-slide -->

        </div>

        <div class="sp-thumbnails">
            <div class="sp-thumbnail">
                <span class="sp-thumbnail-icon"><i class="icon flaticon-world77"></i></span>
            </div>
            <div class="sp-thumbnail">
                <span class="sp-thumbnail-icon"><i class="icon flaticon-mail45"></i></span>
            </div>
            <div class="sp-thumbnail">
                <span class="sp-thumbnail-icon"><i class="icon flaticon-airplane105"></i></span>
            </div>
            <div class="sp-thumbnail">
                <span class="sp-thumbnail-icon"><i class="icon flaticon-telephone114"></i></span>
            </div>
        </div>

        <!-- end sp-slides -->
    </div>
    <!-- end main-slider -->


    <section class="section-area">
        <div class="section-bg_mod-a section-title-block wow">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="ui-title-block"><span class="ui-title-emphasis">Transformations Digitales</span>E-MARKETING</h2>

                        <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-top-minus wow">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="owl-carousel owl-theme enable-owl-carousel"
                             data-min480="1"
                             data-min768="2"
                             data-min992="3"
                             data-min1200="3"
                             data-pagination="false"
                             data-navigation="false"
                             data-auto-play="4000"
                             data-stop-on-hover="true">

                            <div class="block-services">
                                <h3 class="block-services__title ui-title-inner">Conception/Relooking du site web</h3>

                                <div class="block-services__description">Conception/Relooking du site web vitrine ou du site
                                    e-commerce de vos activit&eacute;s, avec services en ligne
                                    + robot digital de prospection et de fidelisation clien
                                </div>
                                <div class="decor-3"></div>
                                <a class="block-services__link btn-link" href="blog-post.html">Lire plus...</a>
                            </div>

                            <div class="block-services">
                                <h3 class="block-services__title ui-title-inner">Community manager</h3>

                                <div class="block-services__description">Conception et mise en placesur les reseaux sociaux des pages
                                    dynamiques et professionnelles de vos activit&eacute; en lien avec votre site web
                                </div>
                                <div class="decor-3"></div>
                                <a class="block-services__link btn-link" href="blog-post.html">Lire plus...</a>
                            </div>

                            <div class="block-services">
                                <h3 class="block-services__title ui-title-inner">Notifications SMS</h3>

                                <div class="block-services__description">Installation, Configuration et Formation aux outilsde prospection et de gestion de la
                                    relation client a base des notifications SMS
                                </div>
                                <div class="decor-3"></div>
                                <a class="block-services__link btn-link" href="blog-post.html">Lire plus...</a>
                            </div>

                            <div class="block-services">
                                <h3 class="block-services__title ui-title-inner">Cartes de Visite</h3>

                                <div class="block-services__description">Conception et production de nouvelles cartes de visites plus adpt&eacute;es a votre
                                    transformation digitale, afin de bootster vos activit&eacute;s.
                                </div>
                                <div class="decor-3"></div>
                                <a class="block-services__link btn-link" href="blog-post.html">Lire plus...</a>
                            </div>

                            <div class="block-services">
                                <h3 class="block-services__title ui-title-inner">Marketing Digital</h3>

                                <div class="block-services__description">Accompagnement technique et E-MARKETING (Marketing Digital)suivant
                                    vos objectifs
                                </div>
                                <div class="decor-3"></div>
                                <a class="block-services__link btn-link" href="blog-post.html">Lire plus...</a>
                            </div>

                            <div class="block-services">
                                <h3 class="block-services__title ui-title-inner">Bonus</h3>

                                <div class="block-services__description">Automatisation, contr&ocirc;le et suivi de vos activit&eacute; commerciales depuis votre t&eacute;l&eacute;phone
                                    , en temps r&eacute;el : ventes, livraison, depenses, stocks, etc...
                                </div>
                                <div class="decor-3"></div>
                                <a class="block-services__link btn-link" href="blog-post.html">Lire plus...</a>
                            </div>
                        </div>
                        <!-- end slider -->
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end section-->


    <section class="section-default wow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="ui-title-block ui-title-block_mod-a">Notre Mission: Bootster & <span
                                class="decor-4 decor-4_mod-a"><i
                                    class="icon flaticon-airplane66 color-primary"></i></span> Doubl&eacute; votre chiffre d'affaire
                    </h2>

                    <div class="owl-carousel owl-theme owl-theme_mod-b enable-owl-carousel"
                         data-pagination="false"
                         data-navigation="false"
                         data-single-item="true"
                         data-auto-play="7000"
                         data-transition-style="fade"
                         data-main-text-animation="true"
                         data-after-init-delay="3000"
                         data-after-move-delay="1000"
                         data-stop-on-hover="true">

                        <div class="reviews">
                            <div class="reviews__text">La solution SMARTSOLUTIONS a été conçue pour tout type d’entreprises (de toute taille),
                                d’organisations ou d’institutions, et dimensionnée en fonctions de leurs objectifs. Cette solution vient résoudre
                                les principaux problèmes régulièrement rencontrés dans les entreprises. Voici les principaux buts de la solution
                                SMARTSOLUTIONS
                            </div>
                            <div class="reviews__author">
                                <span class="reviews__author-title">SMARTSOLUTIONS</span>
                                <img class="reviews__signature img-responsive" src="/media/reviews/signature.png"
                                     alt="signature">
                            </div>
                        </div>

                        <div class="reviews">
                            <div class="reviews__text">La solution SMARTSOLUTIONS est repartie en plusieurs packages afin de donner la possibilité à tout types
                                d’entreprises de différentes tailles, de bénéficier des avantages offerts par la solution.  Ces packs étant structurées de
                                la même façon, c’est à dire intégrant tous les 5 sous produits constituant la solution SMARTSOLUTIONS,
                                mais avec des dimensionnements différents
                            </div>
                            <div class="reviews__author">
                                <span class="reviews__author-title">SMARTSOLUTIONS</span>
                                <img class="reviews__signature img-responsive" src="/media/reviews/signature.png"
                                     alt="signature">
                            </div>
                        </div>

                    </div>
                    <!-- end slider -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end section-default -->


    <div class="container wow">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-progress clearfix">
                    <ul class="list-progress list-progress_mod-a list-progress_left list-unstyled">
                        <li class="list-progress__item clearfix">
                            <div class="list-progress__inner">
                                <span class="list-progress__percent chart" data-percent="1000"><span
                                            class="percent"></span></span>
                                <span class="list-progress__name">Clients satisfaits</span>

                                <div class="decor-3"></div>
                            </div>
                        </li>
                        <li class="list-progress__item clearfix">
                            <div class="list-progress__inner">
                                <span class="list-progress__percent chart" data-percent="15"><span
                                            class="percent"></span></span>
                                <span class="list-progress__name">Employ&eacute;s</span>

                                <div class="decor-3"></div>
                            </div>
                        </li>
                        <li class="list-progress__item clearfix">
                            <div class="list-progress__inner">
                                <span class="list-progress__percent chart" data-percent="0"><span
                                            class="percent"></span></span>
                                <span class="list-progress__name">Awards Won</span>

                                <div class="decor-3"></div>
                            </div>
                        </li>
                    </ul>
                    <!-- end list-progress -->

                    <ul class="list-progress list-progress_mod-a list-progress_right list-unstyled">
                        <li class="list-progress__item clearfix">
                            <div class="list-progress__inner">
                                <span class="list-progress__percent chart" data-percent="637"><span
                                            class="percent"></span></span>
                                <span class="list-progress__name">Owned Vehicles</span>

                                <div class="decor-3"></div>
                            </div>
                        </li>
                        <li class="list-progress__item clearfix">
                            <div class="list-progress__inner">
                                <span class="list-progress__percent chart" data-percent="154"><span
                                            class="percent"></span></span>
                                <span class="list-progress__name">Our Branches</span>

                                <div class="decor-3"></div>
                            </div>
                        </li>
                        <li class="list-progress__item clearfix">
                            <div class="list-progress__inner">
                                <span class="list-progress__percent chart" data-percent="2500"><span
                                            class="percent"></span></span>
                                <span class="list-progress__name">Items Delivered</span>

                                <div class="decor-3"></div>
                            </div>
                        </li>
                    </ul>
                    <!-- end list-progress -->

                    <div class="progress-center">
                        <img class="center-block img-responsive" style="margin-top: 15%;" src="/img/logo_smart_world.jpg" alt="background">
                        <a class="progress-center__link prettyPhoto" href="https://www.youtube.com/watch?v=wh6lxMpffCo"><i
                                    class="icon fa fa-play"></i></a>

                        <div class="progress-center__title ui-title-inner">Regardez la vid&eacute;o</div>
                    </div>
                </div>
                <!-- end section-progress -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->


    <div class="slider-thumbnails wow">
        <div id="slider-product" class="flexslider slider-thumbnails-main">
            <ul class="slides">
                <li class="slider-thumbnails-main__item">
                    <div class="slider-thumbnails-main__img">
                        <img class="img-responsive" src="/media/slider-thumbsnails/1.jpg" alt="Foto">
                    </div>
                    <div class="slider-thumbnails-main__info">
                        <i class="slider-thumbsnails-main__icon flaticon-2437"></i>

                        <div class="decor-2 decor-2_mod_white"></div>
                        <div class="slider-thumbsnails-main__text">
                                <p>C'est le package basique de SMARTSOLUTIONS, il comprend les &eacute;l&eacute;ments de base n&eacute;cessaire a votre transformation digitale.</p>
                                <p>Il vous offre en plus des strat&eacute;gies des e-marketings, un site vitrine de presentation de votre activit&eacute;</p>
                        </div>
                    </div>
                </li>
                <li class="slider-thumbnails-main__item">
                    <div class="slider-thumbnails-main__img">
                        <img class="img-responsive" src="/media/slider-thumbsnails/2.jpg" alt="Foto">
                    </div>
                    <div class="slider-thumbnails-main__info">
                        <i class="slider-thumbsnails-main__icon flaticon-boat17"></i>

                        <div class="decor-2 decor-2_mod_white"></div>
                        <div class="slider-thumbsnails-main__text">
                            <p>C&apos;est le second package SMART, il vous offre, en plus des services du SMARTSOLUTIONS STARTER, un site de service + vitrine.</p>

                        </div>
                    </div>
                </li>
                <li class="slider-thumbnails-main__item">
                    <div class="slider-thumbnails-main__img">
                        <img class="img-responsive" src="/media/slider-thumbsnails/3.jpg" alt="Foto">
                    </div>
                    <div class="slider-thumbnails-main__info">
                        <i class="slider-thumbsnails-main__icon flaticon-airport7"></i>

                        <div class="decor-2 decor-2_mod_white"></div>
                        <div class="slider-thumbsnails-main__text">
                            <p>Tempor incididunt ut labore dolore magna aliqua sed ipsum en veniam dolor sit consectetur
                                adipisicing elit sed ao eiusmod exercitation ullamco laboris nisi aliquip.</p>

                            <p>Mcaodo consequat duis aute irure dolor in reprehenderit voluptate velit sed esse cillum
                                dolore.</p>
                        </div>
                    </div>
                </li>
                <li class="slider-thumbnails-main__item">
                    <div class="slider-thumbnails-main__img">
                        <img class="img-responsive" src="/media/slider-thumbsnails/4.jpg" alt="Foto">
                    </div>
                    <div class="slider-thumbnails-main__info">
                        <i class="slider-thumbsnails-main__icon flaticon-metro3"></i>

                        <div class="decor-2 decor-2_mod_white"></div>
                        <div class="slider-thumbsnails-main__text">
                            <p>Tempor incididunt ut labore dolore magna aliqua sed ipsum en veniam dolor sit consectetur
                                adipisicing elit sed ao eiusmod exercitation ullamco laboris nisi aliquip.</p>

                            <p>Mcaodo consequat duis aute irure dolor in reprehenderit voluptate velit sed esse cillum
                                dolore.</p>
                        </div>
                    </div>
                </li>
                <li class="slider-thumbnails-main__item">
                    <div class="slider-thumbnails-main__img">
                        <img class="img-responsive" src="/media/slider-thumbsnails/5.jpg" alt="Foto">
                    </div>
                    <div class="slider-thumbnails-main__info">
                        <i class="slider-thumbsnails-main__icon flaticon-package82"></i>

                        <div class="decor-2 decor-2_mod_white"></div>
                        <div class="slider-thumbsnails-main__text">
                            <p>Tempor incididunt ut labore dolore magna aliqua sed ipsum en veniam dolor sit consectetur
                                adipisicing elit sed ao eiusmod exercitation ullamco laboris nisi aliquip.</p>

                            <p>Mcaodo consequat duis aute irure dolor in reprehenderit voluptate velit sed esse cillum
                                dolore.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div id="carousel-product" class="flexslider slider-thumbnails-nav">
            <ul class="slides">
                <li class="slider-thumbnails-nav__item">
                    <div class="slider-thumbnails-nav__text"><span class="decor-3 decor-3_mod-a"></span> SMARTSOLUTIONS STARTER
                    </div>
                    <span class="helper-2"></span>
                </li>
                <li class="slider-thumbnails-nav__item">
                    <div class="slider-thumbnails-nav__text"><span class="decor-3 decor-3_mod-a"></span>SMARTSOLUTIONS MEDIUM
                    </div>
                    <span class="helper-2"></span>
                </li>
                <li class="slider-thumbnails-nav__item">
                    <div class="slider-thumbnails-nav__text"><span class="decor-3 decor-3_mod-a"></span>SMARTSOLUTIONS PROFESSIONAL
                    </div>
                    <span class="helper-2"></span>
                </li>
                <li class="slider-thumbnails-nav__item">
                    <div class="slider-thumbnails-nav__text"><span class="decor-3 decor-3_mod-a"></span>SMARTSOLUTIONS
                        INTEGRAL
                    </div>
                    <span class="helper-2"></span>
                </li>
                <li class="slider-thumbnails-nav__item">
                    <div class="slider-thumbnails-nav__text"><span class="decor-3 decor-3_mod-a"></span>SMARTSOLUTIONS
                        CUSTOMIZED
                    </div>
                    <span class="helper-2"></span>
                </li>
            </ul>
        </div>
    </div>
    <!-- end slider-thumbnails -->


    <section class="section-default wow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="ui-title-block"><span class="ui-title-emphasis">Pourquoi nous choisir ?</span>Caracteristiques Principales
                    </h2>

                    <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>
                    <div class="ui-subtitle-block ui-subtitle-block_mod-a">Lorem ipsum dolor sit amet diial consectetur
                        adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna cadso aliqua
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-7">
                    <ul class="list-features list-features_mod-b list-unstyled">
                        <li class="list-features__item">
                            <i class="list-features__icon flaticon-head39"></i>

                            <div class="list-features__inner">
                                <h3 class="list-features__title ui-title-inner">100% satisfied customers</h3>

                                <div class="list-features__description">Lorem ipsum dolor sit amet elit eiusmod tempor
                                    incididunt ut labore dolore magna aliqua
                                </div>
                            </div>
                        </li>
                        <li class="list-features__item">
                            <i class="list-features__icon flaticon-delivery56"></i>

                            <div class="list-features__inner">
                                <h3 class="list-features__title ui-title-inner">quality service affordable price</h3>

                                <div class="list-features__description">Aorem ipsum dolor sit amet elit eiusmod tempor
                                    incididunt ut labore dolore magna aliqua
                                </div>
                            </div>
                        </li>
                        <li class="list-features__item">
                            <i class="list-features__icon flaticon-world77"></i>

                            <div class="list-features__inner">
                                <h3 class="list-features__title ui-title-inner">worldwide locations</h3>

                                <div class="list-features__description">Dorem ipsum dolor sit amet elit eiusmod tempor
                                    incididunt ut labore dolore magna aliqua
                                </div>
                            </div>
                        </li>
                        <li class="list-features__item">
                            <i class="list-features__icon flaticon-transport643"></i>

                            <div class="list-features__inner">
                                <h3 class="list-features__title ui-title-inner">modern vehicles fleet</h3>

                                <div class="list-features__description">Morem ipsum dolor sit amet elit eiusmod tempor
                                    incididunt ut labore dolore magna aliqua
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7 col-sm-5">
                    <img class="img-responsive" src="/media/bg/bg-2.jpg" alt="Foto">
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->



    <div class="section-default parallax-bg parallax-dark wow">
        <ul class="bg-slideshow">
            <li>
                <div style="background-image:url(/media/bg/bg-4.jpg)" class="bg-slide"></div>
            </li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <section class="section-reviews section__inner">
                        <h2 class="ui-title-block ui-title-block_mod_color reviews-list__title">Ils croient en nous</h2>

                        <div class="decor-2 decor-2_mod-b decor-2_mod_white"></div>
                        <div class="owl-carousel owl-theme owl-theme_mod-a enable-owl-carousel"
                             data-pagination="true"
                             data-navigation="false"
                             data-single-item="true"
                             data-auto-play="700000"
                             data-transition-style="fade"
                             data-main-text-animation="true"
                             data-after-init-delay="3000"
                             data-after-move-delay="1000"
                             data-stop-on-hover="true">
                            <div class="reviews-list">
                                <div class="reviews-list__img"><img class="img-responsive"
                                                                    src="/media/reviews/member-1.jpg" alt="foto">
                                </div>
                                <div class="reviews-list__inner">
                                    <blockquote class="reviews-list__blockquote">
                                        <header>
                                            <cite>
                                                <span class="reviews-list__autor">john matt</span>
                                                <span class="reviews-list__company">CEO Trans globOl LTD.</span>
                                            </cite>
                                        </header>
                                        <p>“ Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor
                                            incididunt ut labore etu dolore magna aliqua enim veniam quis nostrud
                                            exercitate ullamco laboris nisi aliquip exea commodo consequat duis aute
                                            dolor reprehenderit in lorem ipsum dolor sit ametas consectetur adipisicing
                                            elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- end slider -->

                            <div class="reviews-list">
                                <div class="reviews-list__img"><img class="img-responsive"
                                                                    src="/media/reviews/member-1.jpg" alt="foto">
                                </div>
                                <div class="reviews-list__inner">
                                    <blockquote class="reviews-list__blockquote">
                                        <header>
                                            <cite>
                                                <span class="reviews-list__autor">john matt</span>
                                                <span class="reviews-list__company">CEO Trans globOl LTD.</span>
                                            </cite>
                                        </header>
                                        <p>“ Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor
                                            incididunt ut labore etu dolore magna aliqua enim veniam quis nostrud
                                            exercitate ullamco laboris nisi aliquip exea commodo consequat duis aute
                                            dolor reprehenderit in lorem ipsum dolor sit ametas consectetur adipisicing
                                            elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- end slider -->
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->


    <div class="section-clients section-bg_mod-a wow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <div class="carusel-clients slider_mod-a owl-carousel owl-theme enable-owl-carousel"
                         data-min480="1"
                         data-min768="4"
                         data-min992="4"
                         data-min1200="4"
                         data-pagination="false"
                         data-navigation="false"
                         data-auto-play="4000"
                         data-stop-on-hover="true">

                        <a class="carusel-clients__item" href="home.html">
                            <img class="carusel-clients__img" src="/media/clients/1.png" alt="logo">
                            <span class="helper-2"></span>
                        </a>
                        <a class="carusel-clients__item" href="home.html">
                            <img class="carusel-clients__img" src="/media/clients/2.png" alt="logo">
                            <span class="helper-2"></span>
                        </a>
                        <a class="carusel-clients__item" href="home.html">
                            <img class="carusel-clients__img" src="/media/clients/3.png" alt="logo">
                            <span class="helper-2"></span>
                        </a>
                        <a class="carusel-clients__item" href="home.html">
                            <img class="carusel-clients__img" src="/media/clients/4.png" alt="logo">
                            <span class="helper-2"></span>
                        </a>

                    </div>
                    <!-- end  -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end section-clients -->


    <div class="section-default section-bg_mod-c wow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="block-contacts">
                        <div class="block-contacts__title-1">Appelez nous maintenant au</div>
                        <div class="block-contacts__title-2"><i class="icon flaticon-telephone114"></i><span
                                    class="color-primary">(237) 699 651 807</span></div>
                        <div class="block-contacts__title-3">Nous sommes ouvert 24/7 pour l&apos;assistance</div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end section-default -->


    <div class="section-area parallax-bg parallax-dark wow">
      @include('include.footer')
    </div>
    <!-- end section-area -->

</div>
<!-- end layout-theme -->


<!-- SCRIPTS MAIN -->

<script src="/js/jquery-migrate-1.2.1.js"></script>
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/waypoints.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="/js/modernizr.custom.js"></script>
<script src="/js/cssua.min.js"></script>


<!--SCRIPTS THEME-->

<!-- Home slider -->
<script src="/plugins/slider-pro/dist/js/jquery.sliderPro.js"></script>
<!-- Sliders -->
<script src="/plugins/owl-carousel/owl.carousel.min.js"></script>

<script src="/plugins/flexslider/jquery.flexslider.js"></script>
<!-- Modal -->
<script src="/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
<!-- Select customization -->
<script src="/plugins/bootstrap-select/dist/js/bootstrap-select.js"></script>
<!-- Chart -->
<script src="/plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<!-- Animation -->
<script src="/plugins/scrollreveal/dist/scrollreveal.min.js"></script>
<!-- Menu for android-->
<script src="/js/doubletaptogo.js"></script>

<!-- Custom -->
<script src="/js/custom.js"></script>

</body>
</html>

