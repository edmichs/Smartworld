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
                        <h1 class="ui-title-page">Contactez nous</h1>
                        <div class="ui-subtitle-page">Get in Touch</div>
                        <div class="decor-2 decor-2_mod-a decor-2_mod_white"></div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section__inner -->
    </div><!-- end section-title -->


    <div class="map"><img class="img-responsive" src="/media/map.jpg" alt="map"></div>

    <div class="section_mod-c">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <section class="section-contacts-block">
                        <h3 class="contacts-block__title ui-title-inner">SMARTWORLD</h3>
                        <div class="decor-2 decor-2_mod-b"></div>
                        <div class="contacts-block__description">Sentez vous libre de nous contacter a tout moment via telephone or email si vous avez des questions ou besoin d'aide!</div>
                        <div class="contacts-block clearfix">
                            <i class="icon flaticon-telephone114"></i>
									<span class="contacts-block__inner">
										<span class="contacts-block__emphasis color-primary">(237) 699 651 807</span> 24/7 Free HelpLine</span>
                        </div>
                        <div class="contacts-block clearfix">
                            <i class="icon flaticon-mail45"></i>
									<span class="contacts-block__inner">
										<a class="contacts-block__emphasis color-primary" href="mailto:silvere@smartsms.com">silvere@smartsms.com</a> Nous rpondons dans les 24H qui suivent</span>
                        </div>
                    </section><!-- end contacts-block -->

                    <section class="section-contacts-block">
                        <h3 class="contacts-block__title ui-title-inner">visitez nos locaux</h3>
                        <div class="decor-2 decor-2_mod-b"></div>
                        <div class="contacts-block contacts-block_mod-a clearfix">
                            <i class="icon flaticon-location74"></i>
                            <span class="contacts-block__inner">BP : 8180 Douala sis Kotto Bloc, Cameroun</span>
                        </div>
                        <div class="contacts-block contacts-block_mod-a clearfix">
                            <i class="icon flaticon-print44"></i>
                            <span class="contacts-block__inner">+237 699 651 807  /  +237 698 033 754</span>
                        </div>
                        <div class="contacts-block contacts-block_mod-a clearfix">
                            <i class="icon flaticon-laptop118"></i>
                            <span class="contacts-block__inner">www.smartworld.com</span>
                        </div>
                    </section><!-- end contacts-block -->


                    <div class="contacts-block__social clearfix">
                        <div class="contacts-block__wrap-social">
                            <div class="decor-3"></div>
                            <a class="btn-link" href="home.html">get connected</a>
                        </div>
                        <ul class="social-links social-links_mod-a social-links_mod-b list-inline">
                            <li><a target="_blank" href="https://twitter.com/"><i class="icons fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.facebook.com/"><i class="icons fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://linkedin.com/"><i class="icons fa fa-linkedin"></i></a></li>
                            <li><a target="_blank" href="https://www.google.com/"><i class="icons fa fa-google"></i></a></li>
                            <li><a target="_blank" href="https://vimeo.com/"><i class="icons fa fa-vimeo"></i></a></li>
                            <li><a target="_blank" href="https://instagram.com/"><i class="icons fa fa-instagram"></i></a></li>
                        </ul>
                    </div>

                </div><!-- end col -->


                <div class="col-md-7 col-md-offset-1">
                    <section class="section-form-request">
                        <div class="wrap-title-block wrap-title-block_mod-c">
                            <h3 class="ui-title-block ui-title-block_mod-c">Envoyer nous un message</h3>
                            <div class="decor-1 decor-1_mod-b"><i class="icon flaticon-delivery36"></i></div>
                        </div>

                        <form class="form-request" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" placeholder="Prenom" required>
                                </div><!-- end col -->
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" placeholder="Nom" required>
                                </div><!-- end col -->
                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <input class="form-control" type="email" placeholder="Email address" required>
                                </div><!-- end col -->
                                <div class="col-sm-6">
                                    <input class="form-control" type="tel" placeholder="phone no." required>
                                </div><!-- end col -->
                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" placeholder="Enquiry type / subject" required>
                                </div><!-- end col -->
                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-xs-12">
                                    <textarea class="form-control" placeholder="message" required="" rows="19"></textarea>
                                    <button type="button" class="btn btn_mod-a btn-sm btn-effect pull-right"><span class="btn__inner">Envoyer</span></button>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </form><!-- end form-request -->
                    </section>
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div><!-- end section-area -->


    <div class="section-area parallax-bg parallax-dark">
   @include('include.footer')
    </div><!-- end section-area -->

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

