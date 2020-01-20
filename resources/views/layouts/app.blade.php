<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon"/>
    
    <title>Hotel Imperial - @yield('title', 'Página de Inicio')</title>

    <!-- page css -->
    <link href="{{ asset('css/login-register.css') }}" rel="stylesheet"/>
    <!-- Custom CSS -->
    <link href="{{ asset('css/hotel.css') }}" rel="stylesheet"/>

    {{--Scripts--}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('styles')
</head>
<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Hotel Imperial</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div class="main-wrapper" id="app">
    @yield('content')
</div>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script>
$(function () {
    $(".preloader").fadeOut();
        });
    $(function () {
    $('[data-toggle="tooltip"]').tooltip();
        });
</script>
@yield('scripts')
</body>
</html>