<!DOCTYPE html>
<html lang="en">

<head>
    <title>Showcase Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('assets/img/apple-icon.png') }}" rel="apple-touch-icon">
    <link type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}" rel="shortcut icon">

    <!-- Load fonts style after rendering the layout styles -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body>
    @include('layouts.navbar')

    <div class="{{ !empty($grayBg) ? 'bg-[#e9eef5]' : '' }} min-h-screen pt-16">@yield('content')</div>

    @include('layouts.footer')

    <!-- Start Script -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @stack('scripts')
    <!-- End Script -->

</body>

</html>
