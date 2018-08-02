<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
                    <h2 class="ui-title-block ui-title-block_mod-a">Notre Mission <span
                                class="decor-4 decor-4_mod-a"><i
                                    class="icon flaticon-logistics3 color-primary"></i></span> Doubl&eacute; votre chiffre d'affaire
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
                            <div class="reviews__text">Gr&a
                            </div>
                            <div class="reviews__author">
                                <span class="reviews__author-title">message by ceo</span>
                                <img class="reviews__signature img-responsive" src="/media/reviews/signature.png"
                                     alt="signature">
                            </div>
                        </div>

                        <div class="reviews">
                            <div class="reviews__text">Amet consectetur adipisicing elit sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua enim veniam quis nostrud exercitation
                                ullamco laboris nisi ut aliquip exea commodo consequat duis aute dolor reprehenderit in
                                voluptate
                            </div>
                            <div class="reviews__author">
                                <span class="reviews__author-title">message by ceo</span>
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
                                <span class="list-progress__percent chart" data-percent="290"><span
                                            class="percent"></span></span>
                                <span class="list-progress__name">Satisfied Clients</span>

                                <div class="decor-3"></div>
                            </div>
                        </li>
                        <li class="list-progress__item clearfix">
                            <div class="list-progress__inner">
                                <span class="list-progress__percent chart" data-percent="318"><span
                                            class="percent"></span></span>
                                <span class="list-progress__name">Workers in Team</span>

                                <div class="decor-3"></div>
                            </div>
                        </li>
                        <li class="list-progress__item clearfix">
                            <div class="list-progress__inner">
                                <span class="list-progress__percent chart" data-percent="107"><span
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
                        <img class="center-block img-responsive" src="/media/bg/bg-1.jpg" alt="background">
                        <a class="progress-center__link prettyPhoto" href="https://www.youtube.com/watch?v=wh6lxMpffCo"><i
                                    class="icon fa fa-play"></i></a>

                        <div class="progress-center__title ui-title-inner">watch the tour video</div>
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
                        <i class="slider-thumbsnails-main__icon flaticon-ship3"></i>

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
                        <img class="img-responsive" src="/media/slider-thumbsnails/2.jpg" alt="Foto">
                    </div>
                    <div class="slider-thumbnails-main__info">
                        <i class="slider-thumbsnails-main__icon flaticon-transport325"></i>

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
                <li class="slider-thumbnails-main__item">
                    <div class="slider-thumbnails-main__img">
                        <img class="img-responsive" src="/media/slider-thumbsnails/6.jpg" alt="Foto">
                    </div>
                    <div class="slider-thumbnails-main__info">
                        <i class="slider-thumbsnails-main__icon flaticon-industrial2"></i>

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
                    <div class="slider-thumbnails-nav__text"><span class="decor-3 decor-3_mod-a"></span>sea freight
                    </div>
                    <span class="helper-2"></span>
                </li>
                <li class="slider-thumbnails-nav__item">
                    <div class="slider-thumbnails-nav__text"><span class="decor-3 decor-3_mod-a"></span>road trasnsport
                    </div>
                    <span class="helper-2"></span>
                </li>
                <li class="slider-thumbnails-nav__item">
                    <div class="slider-thumbnails-nav__text"><span class="decor-3 decor-3_mod-a"></span>air freight
                    </div>
                    <span class="helper-2"></span>
                </li>
                <li class="slider-thumbnails-nav__item">
                    <div class="slider-thumbnails-nav__text"><span class="decor-3 decor-3_mod-a"></span>railway
                        logistics
                    </div>
                    <span class="helper-2"></span>
                </li>
                <li class="slider-thumbnails-nav__item">
                    <div class="slider-thumbnails-nav__text"><span class="decor-3 decor-3_mod-a"></span>packaging &
                        storage
                    </div>
                    <span class="helper-2"></span>
                </li>
                <li class="slider-thumbnails-nav__item">
                    <div class="slider-thumbnails-nav__text"><span class="decor-3 decor-3_mod-a"></span>warehousing
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
                    <h2 class="ui-title-block"><span class="ui-title-emphasis">why choose us</span>the main features
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


    <div class="section-bg_mod-b section_mod-a wow">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <section class="section-area">
                        <h2 class="ui-title-block ui-title-block_w_bg ui-title-block_w_bg-first"><span
                                    class="ui-title-block__inner">request a quote</span></h2>

                        <form class="form-request form-request_mod-a ui-form block_right_pad" action="#" method="post">
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" placeholder="Full Name">
                                </div>
                                <div class="col-xs-12">
                                    <input class="form-control" type="email" placeholder="Email address">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="select-control">
                                        <select class="selectpicker">
                                            <option>Destination From....</option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="select-control">
                                        <select class="selectpicker">
                                            <option>Destinatin To....</option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="select-control">
                                        <select class="selectpicker">
                                            <option>Logistics Type</option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <input class="form-control" type="email" placeholder="Subject">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <textarea class="form-control" rows="11" placeholder="message"></textarea>
                                    <button class="ui-form__btn btn btn-sm btn_mod-a btn-effect"><span
                                                class="btn__inner">request quote</span></button>
                                </div>
                            </div>
                        </form>
                    </section>
                    <div class="decor-4 decor-4_mod-b"><i class="icon flaticon-logistics3 color-primary"></i></div>
                </div>

                <div class="col-md-6">
                    <section class="section-area">
                        <h2 class="ui-title-block ui-title-block_w_bg ui-title-block_w_bg-last ui-title-block_w_bg-primary">
                            <span class="ui-title-block__inner">general faq’s</span></h2>

                        <div class="block_left_pad">
                            <div class="panel-group accordion" id="accordion-1">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <a class="btn-collapse collapsed" data-toggle="collapse"
                                           data-parent="#accordion-1" href="#collapse-1"><i class="icon"></i><span
                                                    class="helper-2"></span></a>

                                        <h3 class="panel-title ui-title-inner">Lorem ipsum dolor sit amet
                                            consectetur</h3>

                                        <div class="decor-2 decor-2_mod-b"></div>
                                    </div>
                                    <div id="collapse-1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nos-trud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Due aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end panel -->

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="btn-collapse" data-toggle="collapse" data-parent="#accordion-1"
                                           href="#collapse-2"><i class="icon"></i><span class="helper-2"></span></a>

                                        <h3 class="panel-title ui-title-inner">veniam quis nostrud exercitation
                                            ullamco</h3>

                                        <div class="decor-2 decor-2_mod-b"></div>
                                    </div>
                                    <div id="collapse-2" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>Ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nos-trud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Due aute irure dolor in reprehenderit in oluptate velit esse
                                                cillum.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end panel -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <a class="btn-collapse collapsed" data-toggle="collapse"
                                           data-parent="#accordion-1" href="#collapse-3"><i class="icon"></i><span
                                                    class="helper-2"></span></a>

                                        <h3 class="panel-title ui-title-inner">aute irure dolor in reprehenderit in</h3>

                                        <div class="decor-2 decor-2_mod-b"></div>
                                    </div>
                                    <div id="collapse-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nos-trud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Due aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end panel -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <a class="btn-collapse collapsed" data-toggle="collapse"
                                           data-parent="#accordion-1" href="#collapse-4"><i class="icon"></i><span
                                                    class="helper-2"></span></a>

                                        <h3 class="panel-title ui-title-inner">labore et dolore magna aliqua enim ad
                                            minim</h3>

                                        <div class="decor-2 decor-2_mod-b"></div>
                                    </div>
                                    <div id="collapse-4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nos-trud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Due aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end panel -->
                            </div>
                            <!-- end accordion -->
                            <div class="note text-center">If you didn’t found the answer to your question here, Contact
                                us <br>& our representative will reply you as soon as poossible, usually within 24
                                hours!
                            </div>
                            <div class="decor-3 text-center"></div>
                            <div class="text-center"><a class="btn-link btn-link_lg" href="home.html">get in touch</a>
                            </div>

                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
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
                        <h2 class="ui-title-block ui-title-block_mod_color reviews-list__title">they trust us</h2>

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


    <section class="section-area wow">
        <div class="section-bg_mod-a section-title-block">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="ui-title-block"><span class="ui-title-emphasis">latest from the blog</span>company
                            news</h2>

                        <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-top-minus section_mod-a">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <article class="post post_mod-a clearfix">
                            <div class="entry-media">
                                <img class="img-responsive" src="/media/posts/360x272/1.jpg" alt="Foto">

                                <div class="entry-date"><a href="blog-post.html"><span
                                                class="entry-date__inner">10 feb</span><i
                                                class="icon fa fa-video-camera"></i></a></div>
                            </div>
                            <div class="entry-meta">
                                <span class="entry-meta__item">In: <a class="entry-meta__link" href="blog-post.html">Trucking,
                                        Delivery</a></span>
                                <span class="entry-meta__item"><i class="icon fa fa-comment"></i>34</span>
                            </div>

                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title ui-title-inner">Lorem ipsum dolor sit consectetur</h2>
                                </div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet consectetur dipisicing elit sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud
                                        ...</p>
                                </div>
                                <div class="entry-footer">
                                    <div class="decor-3"></div>
                                    <a class="btn-link" href="blog-post.html">read more</a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-sm-4">
                        <article class="post post_mod-a clearfix">
                            <div class="entry-media">
                                <img class="img-responsive" src="/media/posts/360x272/2.jpg" alt="Foto">

                                <div class="entry-date"><a href="blog-post.html"><span
                                                class="entry-date__inner">10 feb</span><i
                                                class="icon fa fa-picture-o"></i></a></div>
                            </div>
                            <div class="entry-meta">
                                <span class="entry-meta__item">In: <a class="entry-meta__link" href="blog-post.html">cargo,
                                        warehouse</a></span>
                                <span class="entry-meta__item"><i class="icon fa fa-comment"></i>34</span>
                            </div>

                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title ui-title-inner">incididunt ut labore et dolore magna</h2>
                                </div>
                                <div class="entry-content">
                                    <p>Commodo consequat. Duis aute irure dolor in reprehen derit in voluptate velit
                                        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat ...</p>
                                </div>
                                <div class="entry-footer">
                                    <div class="decor-3"></div>
                                    <a class="btn-link" href="blog-post.html">read more</a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-sm-4">
                        <article class="post post_mod-a clearfix">
                            <div class="entry-media">
                                <img class="img-responsive" src="/media/posts/360x272/3.jpg" alt="Foto">

                                <div class="entry-date"><a href="blog-post.html"><span
                                                class="entry-date__inner">10 feb</span><i class="icon fa fa-pencil"></i></a>
                                </div>
                            </div>
                            <div class="entry-meta">
                                <span class="entry-meta__item">In: <a class="entry-meta__link" href="blog-post.html">sea
                                        freight, air freight</a></span>
                                <span class="entry-meta__item"><i class="icon fa fa-comment"></i>34</span>
                            </div>

                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title ui-title-inner">nostrud exercitation ullamco laboris</h2>
                                </div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet consectetur dipisicing elit sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud
                                        ...</p>
                                </div>
                                <div class="entry-footer">
                                    <div class="decor-3"></div>
                                    <a class="btn-link" href="blog-post.html">read more</a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                        <div class="block-contacts__title-1">call us now on</div>
                        <div class="block-contacts__title-2"><i class="icon flaticon-telephone114"></i><span
                                    class="color-primary">(007) 123 456 7890</span></div>
                        <div class="block-contacts__title-3">We are open 24/7 for assistance</div>
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

