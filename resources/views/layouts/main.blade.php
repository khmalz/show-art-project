<!DOCTYPE html>
<html lang="en">

<head>
    <title>Showcase Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('/assets/img/apple-icon.png') }}" rel="apple-touch-icon">
    <link type="image/x-icon" href="{{ asset('/assets/img/favicon.ico') }}" rel="shortcut icon">

    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/templatemo.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/custom.css') }}" rel="stylesheet">

    <!-- Load fonts style after rendering the layout styles -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link href="{{ asset('/assets/css/fontawesome.min.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body>
    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')

    <!-- Start Script -->
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/js/templatemo.js') }}"></script>
    <script src="{{ asset('/assets/js/custom.js') }}"></script>
    <!-- End Script -->

    @stack('scripts')

</body>

</html>
