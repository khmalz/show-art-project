<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Site title
   ================================================== -->
    <title>Showcase Project</title>

    <!-- Bootstrap CSS
   ================================================== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Animate CSS
   ================================================== -->
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">

    <!-- Font Icons CSS
   ================================================== -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- Main CSS
   ================================================== -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Google web font
   ================================================== -->
    <link type='text/css' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet'>

</head>

<body>

    <div class="preloader">

        <div class="sk-spinner sk-spinner-pulse"></div>

    </div>

    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
