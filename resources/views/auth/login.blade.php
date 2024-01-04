<!DOCTYPE html><!--
   * CoreUI - Free Bootstrap Admin Template
   * @version v4.2.2
   * @link https://coreui.io/product/free-bootstrap-admin-template/
   * Copyright (c) 2023 creativeLabs Łukasz Holeczek
   * Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
   -->
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link href="{{ asset('assets/admin/assets/favicon/apple-icon-57x57.png') }}" rel="apple-touch-icon" sizes="57x57">
    <link href="{{ asset('assets/admin/assets/favicon/apple-icon-60x60.png') }}" rel="apple-touch-icon" sizes="60x60">
    <link href="{{ asset('assets/admin/assets/favicon/apple-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('assets/admin/assets/favicon/apple-icon-76x76.png') }}" rel="apple-touch-icon" sizes="76x76">
    <link href="{{ asset('assets/admin/assets/favicon/apple-icon-114x114.png') }}" rel="apple-touch-icon"
        sizes="114x114">
    <link href="{{ asset('assets/admin/assets/favicon/apple-icon-120x120.png') }}" rel="apple-touch-icon"
        sizes="120x120">
    <link href="{{ asset('assets/admin/assets/favicon/apple-icon-144x144.png') }}" rel="apple-touch-icon"
        sizes="144x144">
    <link href="{{ asset('assets/admin/assets/favicon/apple-icon-152x152.png') }}" rel="apple-touch-icon"
        sizes="152x152">
    <link href="{{ asset('assets/admin/assets/favicon/apple-icon-180x180.png') }}" rel="apple-touch-icon"
        sizes="180x180">
    <link type="image/png" href="{{ asset('assets/admin/assets/favicon/android-icon-192x192.png') }}" rel="icon"
        sizes="192x192">
    <link type="image/png" href="{{ asset('assets/admin/assets/favicon/favicon-32x32.png') }}" rel="icon"
        sizes="32x32">
    <link type="image/png" href="{{ asset('assets/admin/assets/favicon/favicon-96x96.png') }}" rel="icon"
        sizes="96x96">
    <link type="image/png" href="{{ asset('assets/admin/assets/favicon/favicon-16x16.png') }}" rel="icon"
        sizes="16x16">
    <link href="{{ asset('assets/admin/assets/favicon/manifest.json') }}" rel="manifest">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->

    <link href="{{ asset('assets/admin/vendors/simplebar/css/simplebar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/vendors/simplebar.css') }}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="bg-light min-vh-100 d-flex align-items-center flex-row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-7 mb-0 p-4">
                            <div class="card-body">
                                <h1>Login</h1>
                                <p class="text-medium-emphasis">Sign In to your account</p>
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-user">
                                            </use>
                                        </svg></span>
                                    <input class="form-control" type="text" placeholder="Username">
                                </div>
                                <div class="input-group mb-4"><span class="input-group-text">
                                        <svg class="icon">
                                            <use
                                                xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-lock-locked">
                                            </use>
                                        </svg></span>
                                    <input class="form-control" type="password" placeholder="Password">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary px-4" type="button">Login</button>
                                    </div>
                                    <div class="col-6 text-end">
                                        <button class="btn btn-link px-0" type="button">Forgot password?</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-md-5 bg-primary py-5 text-white">
                            <div class="card-body text-center">
                                <div>
                                    <h2>Sign up</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                    <a class="btn btn-lg btn-outline-light mt-3" type="button"
                                        href="{{ route('register') }}">Register
                                        Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('assets/admin/assets/admin/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/simplebar/js/simplebar.min.js') }}"></script>
    <script></script>

</body>

</html>
