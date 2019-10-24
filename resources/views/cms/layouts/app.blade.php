<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="mahmoud joumaa">
    <title>Argon Dashboard PRO - Premium Bootstrap 4 Admin Template</title>
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro" />
    <!--  Social tags      -->
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/%40fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('css/argon.min9f1e.css?v=1.1.0') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/sweet-alerts/sweetalert.css') }}">

    @stack('css')

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
@include('cms.layouts.partials.sidebar')
<!-- Main content -->
<div class="main-content" id="panel">
    @include('cms.layouts.partials.header')
    <div class="container-fluid mt--6">
        @yield('content')


        @include('cms.layouts.partials.footer')
    </div>
</div>
<!-- Argon Scripts -->
<div id="preloader"></div>
<!-- Core -->
<script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/js-cookie/js.cookie.js') }}"></script>
<script src="{{ asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('vendor/sweet-alerts/sweetalert.min.js') }}"></script>
<!-- Argon JS -->
@stack('js')
<script src="{{ asset('js/argon.min9f1e.js?v=1.1.0') }}"></script>
<!-- Demo JS - remove this in your project -->
{{--<script src="{{ asset('js/demo.min.js') }}"></script>--}}


</body>
</html>
