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

    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = 'c5324f337341c9453e4e3ceaea26f54f1cf7fbdb';
        window.smartsupp||(function(d) {
            var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
            s=d.getElementsByTagName('script')[0];c=d.createElement('script');
            c.type='text/javascript';c.charset='utf-8';c.async=true;
            c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
    </script>
</head>

<body>

    @yield('content')


@yield('js')

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
