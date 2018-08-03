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

<div class="layout-theme animated-css"  data-header="sticky" data-header-top="200">


    <!-- HEADER -->

    <div class="container">
        @include('include.header')
    </div><!-- end container-->


    <div class="section-title parallax-bg parallax-light">
        <ul class="bg-slideshow">
            <li>
                <div style="background-image:url(/media/bg/bg-title.jpg)" class="bg-slide"></div>
            </li>
        </ul>
        <div class="section__inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="ui-title-page">A propos de nous</h1>
                        <div class="ui-subtitle-page">Something about our company</div>
                        <div class="decor-2 decor-2_mod-a decor-2_mod_white"></div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section__inner -->
    </div><!-- end section-title -->


    <section class="section_mod-e">
        <div class="block-about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h2 class="ui-title-block"><span class="ui-title-emphasis ui-title-emphasis_sm">Nous garantissons le meilleur Service <br> transformation digitale &</span>E-Marketing</h2>
                        <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>
                        <div class="ui-subtitle-block">Lorem ipsum dolor sit amet consectetur adipisicing sed eiusmod tempor incididunt ut labore et dolore</div>
                        <div class="block-about__description">
                            <p>Lorem ipsum dolor sit amet elit sed aiusmod tempor incididunt ut labore dolore magna aliqua sed ipsum ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiu mod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div><!-- end col -->
                    <div class="col-sm-6">
                        <img class="block-about__img img-responsive" src="/media/posts/487x335/1.jpg" alt="Foto">
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div>
    </section><!-- end section-default -->


    <section class="section-default">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="ui-title-block ui-title-block_mod-b">Notre Mission: Bootster & <span class="decor-4 decor-4_mod-c"><i class="icon flaticon-airplane66 color-primary"></i></span>Doubl&eacute; votre chiffre d'affaire</h2>

                    <div class="owl-carousel owl-theme enable-owl-carousel"
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
                            <div class="reviews__text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat duis aute dolor reprehenderit in voluptate</div>
                            <div class="reviews__author">
                                <span class="reviews__author-title">message by ceo</span>
                                <img class="reviews__signature img-responsive" src="/media/reviews/signature.png" alt="signature">
                            </div>
                        </div>

                        <div class="reviews">
                            <div class="reviews__text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat duis aute dolor reprehenderit in voluptate</div>
                            <div class="reviews__author">
                                <span class="reviews__author-title">message by ceo</span>
                                <img class="reviews__signature img-responsive" src="/media/reviews/signature.png" alt="signature">
                            </div>
                        </div>

                    </div><!-- end slider -->

                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section-default -->


    <div class="section-bg_mod-d">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="owl-carousel owl-theme enable-owl-carousel"
                         data-min480="1"
                         data-min768="2"
                         data-min992="3"
                         data-min1200="3"
                         data-pagination="false"
                         data-navigation="true"
                         data-auto-play="4000"
                         data-stop-on-hover="true">


                        <article class="post post_mod-b clearfix">
                            <div class="entry-media">
                                <a class="prettyPhoto" href="/media/posts/320x220/1.jpg">
                                    <img class="img-responsive" src="/media/posts/320x220/1.jpg" alt="Foto">
                                </a>
                            </div>

                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title ui-title-inner"><a href="blog-post.html">Doubl&eacute; votre CA en peu de temps</a></h2>
                                    <div class="decor-2 decor-2_mod-b"></div>
                                </div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet elit sed usmod tempor incididunt ut labore dolore magna qua sed ipsum ut enim minim veniam</p>
                                </div>
                            </div>
                        </article>

                        <article class="post post_mod-b clearfix">
                            <div class="entry-media">
                                <a class="prettyPhoto" href="/media/posts/320x220/2.jpg">
                                    <img class="img-responsive" src="/media/posts/320x220/2.jpg" alt="Foto">
                                </a>
                            </div>

                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title ui-title-inner"><a href="blog-post.html">Devenir leader dans son domaine</a></h2>
                                    <div class="decor-2 decor-2_mod-b"></div>
                                </div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet elit sed usmod tempor incididunt ut labore dolore magna qua sed ipsum ut enim minim veniam</p>
                                </div>
                            </div>
                        </article>

                        <article class="post post_mod-b clearfix">
                            <div class="entry-media">
                                <a class="prettyPhoto" href="/media/posts/320x220/3.jpg">
                                    <img class="img-responsive" src="/media/posts/320x220/3.jpg" alt="Foto">
                                </a>
                            </div>

                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title ui-title-inner"><a href="blog-post.html">solutions with technique</a></h2>
                                    <div class="decor-2 decor-2_mod-b"></div>
                                </div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet elit sed usmod tempor incididunt ut labore dolore magna qua sed ipsum ut enim minim veniam</p>
                                </div>
                            </div>
                        </article>
                    </div><!-- end slider -->
                </div>
            </div>
        </div>
    </div>


    <section class="section_mod-c section-bg_mod-a">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="ui-title-block"><span class="ui-title-emphasis">Notre histoire</span>Comment nous y sommes parvenu</h2>
                    <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>
                    <div class="ui-subtitle-block ui-subtitle-block_mod-a">Lorem ipsum dolor sit amet diial consectetur adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna cadso aliqua</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <ul class="list-features list-features_mod-a list-features_left list-unstyled">
                        <li class="list-features__item">
                            <i class="list-features__icon flaticon-delivery56"></i>
                            <div class="list-features__inner">
                                <h3 class="list-features__title ui-title-inner">We started - <span class="list-features__title-emphasis">2002</span></h3>
                                <div class="list-features__description">Aorem ipsum dolor sit amet elit eiusmod tempor incididunt ut labore dolore magna aliquaLorem ipsum dolor sit amet consectetur</div>
                            </div>
                        </li>
                        <li class="list-features__item">
                            <i class="list-features__icon flaticon-world77"></i>
                            <div class="list-features__inner">
                                <h3 class="list-features__title ui-title-inner"><span class="list-features__title-emphasis">2005</span> - more shipping locations</h3>
                                <div class="list-features__description">Aorem ipsum dolor sit amet elit eiusmod tempor incididunt ut labore dolore magna aliquaLorem ipsum dolor sit amet consectetur</div>
                            </div>
                        </li>
                        <li class="list-features__item">
                            <i class="list-features__icon flaticon-transport643"></i>
                            <div class="list-features__inner">
                                <h3 class="list-features__title ui-title-inner">new vehicles in fleet - <span class="list-features__title-emphasis">2010</span></h3>
                                <div class="list-features__description">Aorem ipsum dolor sit amet elit eiusmod tempor incididunt ut labore dolore magna aliquaLorem ipsum dolor sit amet consectetur</div>
                            </div>
                        </li>
                        <li class="list-features__item">
                            <i class="list-features__icon flaticon-sticker1"></i>
                            <div class="list-features__inner">
                                <h3 class="list-features__title ui-title-inner"><span class="list-features__title-emphasis">2014</span> - Award of the year won</h3>
                                <div class="list-features__description">Aorem ipsum dolor sit amet elit eiusmod tempor incididunt ut labore dolore magna aliquaLorem ipsum dolor sit amet consectetur</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <a class="btn btn_mod-a btn-sm btn-effect" href="home.html"><span class="btn__inner">load more</span></a>
                </div>
            </div>
        </div>
    </section>


    <div class="section-default parallax-bg parallax-dark">
        <ul class="bg-slideshow">
            <li>
                <div style="background-image:url(/media/bg/bg-6.jpg)" class="bg-slide"></div>
            </li>
        </ul>
        <div class="section__inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="text-center">
                            <i class='list-progress__title-icon flaticon-delivery36'></i>
                            <h2 class="ui-title-block ui-title-block_mod_color">Chiffre cl&eacute;</h2>
                            <div class="decor-2 decor-2_mod-b decor-2_mod_white"></div>
                        </div>
                        <ul class="list-progress list-progress_mod-b list-unstyled">
                            <li class="list-progress__item clearfix">
                                <div class="list-progress__inner">
                                    <span class="list-progress__percent chart" data-percent="290"><span class="percent"></span></span>
                                    <div class="decor-3 decor-3_mod-a"></div>
                                    <span class="list-progress__name">Satisfied Clients</span>
                                </div>
                            </li>
                            <li class="list-progress__item clearfix">
                                <div class="list-progress__inner">
                                    <span class="list-progress__percent chart" data-percent="637"><span class="percent"></span></span>
                                    <div class="decor-3 decor-3_mod-a"></div>
                                    <span class="list-progress__name">Owned Vehicles</span>
                                </div>
                            </li>
                            <li class="list-progress__item clearfix">
                                <div class="list-progress__inner">
                                    <span class="list-progress__percent chart" data-percent="318"><span class="percent"></span></span>
                                    <div class="decor-3 decor-3_mod-a"></div>
                                    <span class="list-progress__name">Workers in Team</span>
                                </div>
                            </li>
                            <li class="list-progress__item clearfix">
                                <div class="list-progress__inner">
                                    <span class="list-progress__percent chart" data-percent="107"><span class="percent"></span></span>
                                    <div class="decor-3 decor-3_mod-a"></div>
                                    <span class="list-progress__name">Awards Won</span>
                                </div>
                            </li>
                            <li class="list-progress__item clearfix">
                                <div class="list-progress__inner">
                                    <span class="list-progress__percent chart" data-percent="154"><span class="percent"></span></span>
                                    <div class="decor-3 decor-3_mod-a"></div>
                                    <span class="list-progress__name">Our Branches</span>
                                </div>
                            </li>
                            <li class="list-progress__item clearfix">
                                <div class="list-progress__inner">
                                    <span class="list-progress__percent chart" data-percent="2500"><span class="percent"></span></span>
                                    <div class="decor-3 decor-3_mod-a"></div>
                                    <span class="list-progress__name">Items Delivered</span>
                                </div>
                            </li>
                        </ul><!-- end list-progress -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="section-area">
        <div class="section-bg_mod-a section-title-block">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="ui-title-block"><span class="ui-title-emphasis">Dedi&eacute; & Professionnelle</span>notre Equipe</h2>
                        <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-top-minus section_mod-a">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="owl-carousel owl-theme enable-owl-carousel"
                             data-min480="2"
                             data-min768="2"
                             data-min992="3"
                             data-min1200="4"
                             data-pagination="false"
                             data-navigation="false"
                             data-auto-play="4000"
                             data-stop-on-hover="true">

                            <section class="list-staff">
                                <div class="list-staff__img"><img class="img-responsive" src="/media/staff/member-2.jpg" alt="Foto"></div>
                                <div class="list-staff__categories">managing director</div>
                                <h3 class="list-staff__name ui-title-inner">Silvere SEUMO TCHUYA</h3>
                                <div class="decor-3"></div>
                                <div class="list-staff__description">Lorem ipsum dolor sit ameut consectetu dipisicing elit sed do eiusmod tempor cd dunt labore et dolore magna.</div>
                                <ul class="social-links list-inline">
                                    <li><a target="_blank" href="https://twitter.com/"><i class="icon fa fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://www.facebook.com/"><i class="icon fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="https://instagram.com/"><i class="icon fa fa-linkedin"></i></a></li>
                                    <li><a target="_blank" href="https://www.google.com/"><i class="icon fa fa-google"></i></a></li>
                                </ul>
                            </section>

                            <section class="list-staff">
                                <div class="list-staff__img"><img class="img-responsive" src="/media/staff/member-1.jpg" alt="Foto"></div>
                                <div class="list-staff__categories">Business Developer manager</div>
                                <h3 class="list-staff__name ui-title-inner">Achille david</h3>
                                <div class="decor-3"></div>
                                <div class="list-staff__description">Lorem ipsum dolor sit ameut consectetu dipisicing elit sed do eiusmod tempor cd dunt labore et dolore magna.</div>
                                <ul class="social-links list-inline">
                                    <li><a target="_blank" href="https://twitter.com/"><i class="icon fa fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://www.facebook.com/"><i class="icon fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="https://instagram.com/"><i class="icon fa fa-linkedin"></i></a></li>
                                    <li><a target="_blank" href="https://www.google.com/"><i class="icon fa fa-google"></i></a></li>
                                </ul>
                            </section>

                            <section class="list-staff">
                                <div class="list-staff__img"><img class="img-responsive" src="/media/staff/member-4.jpg" alt="Foto"></div>
                                <div class="list-staff__categories">Sofware Engeneer manager</div>
                                <h3 class="list-staff__name ui-title-inner">Edy TCHOKOUANI</h3>
                                <div class="decor-3"></div>
                                <div class="list-staff__description">Lorem ipsum dolor sit ameut consectetu dipisicing elit sed do eiusmod tempor cd dunt labore et dolore magna.</div>
                                <ul class="social-links list-inline">
                                    <li><a target="_blank" href="https://twitter.com/"><i class="icon fa fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://www.facebook.com/"><i class="icon fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="https://instagram.com/"><i class="icon fa fa-linkedin"></i></a></li>
                                    <li><a target="_blank" href="https://www.google.com/"><i class="icon fa fa-google"></i></a></li>
                                </ul>
                            </section>

                            <section class="list-staff">
                                <div class="list-staff__img"><img class="img-responsive" src="/media/staff/member-7.jpg" alt="Foto"></div>
                                <div class="list-staff__categories">Manager Assistant</div>
                                <h3 class="list-staff__name ui-title-inner">Christianne NYANGONO</h3>
                                <div class="decor-3"></div>
                                <div class="list-staff__description">Lorem ipsum dolor sit ameut consectetu dipisicing elit sed do eiusmod tempor cd dunt labore et dolore magna.</div>
                                <ul class="social-links list-inline">
                                    <li><a target="_blank" href="https://twitter.com/"><i class="icon fa fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://www.facebook.com/"><i class="icon fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="https://instagram.com/"><i class="icon fa fa-linkedin"></i></a></li>
                                    <li><a target="_blank" href="https://www.google.com/"><i class="icon fa fa-google"></i></a></li>
                                </ul>
                            </section>
                        </div><!-- end carousel -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="section-clients section-bg_mod-a">
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

                    </div><!-- end  -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section-clients -->


    <div class="section-area parallax-bg parallax-dark wow">
        @include('include.footer')
    </div>
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

