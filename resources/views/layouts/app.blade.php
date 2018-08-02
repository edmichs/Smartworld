<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/index.css')}}" rel="stylesheet">
    <link href="{{asset('css/master.css')}}" rel="stylesheet">
    <script src="{{asset('plugins/jquery/jquery-1.11.3.min.js')}}"></script>
    @yield('css')
</head>
<body>

<!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end -->



<div class="layout-theme animated-css"  data-header="sticky" data-header-top="200">
    @yield('content')
</div><!-- end layout-theme -->
@yield('js')
    <script src="{{asset('plugins/flexslider/jquery.flexslider.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('plugins/prettyphoto/js/jquery.prettyPhoto.js')}}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{asset('plugins/jelect/jquery.jelect.js')}}"></script>
    <script src="{{asset('plugins/nouislider/jquery.nouislider.all.min.js')}}"></script>

    <!--THEME-->
    <script src="{{asset('js/cssua.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

</body>
</html>
