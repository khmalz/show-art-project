<!DOCTYPE html>
<html lang="en">

<head>
    <!--

Template 2082 Pure Mix

http://www.tooplate.com/view/2082-pure-mix

-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Site title
   ================================================== -->
    <title>Pure Mix - HTML CSS Template</title>

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

    <!-- Preloader section
================================================== -->
    <div class="preloader">

        <div class="sk-spinner sk-spinner-pulse"></div>

    </div>

    <!-- Navigation section
================================================== -->
    <div class="nav-container">
        <nav class="nav-inner transparent">

            <div class="navbar">
                <div class="container">
                    <div class="row">

                        <div class="brand">
                            <a href="{{ url('index.html') }}">Pure Mix</a>
                        </div>

                        <div class="navicon">
                            <div class="menu-container">

                                <div class="circle dark inline">
                                    <i class="icon ion-navicon"></i>
                                </div>

                                <div class="list-menu">
                                    <i class="icon ion-close-round close-iframe"></i>
                                    <div class="intro-inner">
                                        <ul id="nav-menu">
                                            <li><a href="{{ url('index.html') }}">Home</a></li>
                                            <li><a href="{{ url('about.html') }}">About</a></li>
                                            <li><a href="{{ url('blog.html') }}">Blog</a></li>
                                            <li><a href="{{ url('contact.html') }}">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </nav>
    </div>

    <!-- Header section
================================================== -->
    <section class="header-one" id="header">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
                    <div class="header-thumb">
                        <h1 class="wow fadeIn" data-wow-delay="1.6s">Lorem ipsum dolor</h1>
                        <h3 class="wow fadeInUp" data-wow-delay="1.9s">Six HTML pages included</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Portfolio section
================================================== -->
    <section id="portfolio">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">

                    <!-- iso section -->
                    <div class="iso-section wow fadeInUp" data-wow-delay="2.6s">

                        <ul class="clearfix filter-wrapper">
                            <li><a class="selected opc-main-bg" data-filter="*" href="{{ url('#') }}">All</a></li>
                            <li><a class="opc-main-bg" data-filter=".graphic" href="{{ url('#') }}">Graphic</a>
                            </li>
                            <li><a class="opc-main-bg" data-filter=".template" href="{{ url('#') }}">Web
                                    template</a></li>
                            <li><a class="opc-main-bg" data-filter=".photoshop"
                                    href="{{ url('#') }}">Photoshop</a></li>
                            <li><a class="opc-main-bg" data-filter=".branding" href="{{ url('#') }}">Branding</a>
                            </li>
                        </ul>

                        <!-- iso box section -->
                        <div class="iso-box-section wow fadeInUp" data-wow-delay="1s">
                            <div class="iso-box-wrapper col4-iso-box">

                                <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img class="img-responsive"
                                            src="{{ asset('assets/images/portfolio-img1.jpg') }}" alt="Portfolio">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-item">
                                                <a href="{{ url('single-project.html') }}"><i
                                                        class="fa fa-link"></i></a>
                                                <h2>Project One</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box graphic template col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img class="img-responsive"
                                            src="{{ asset('assets/images/portfolio-img2.jpg') }}" alt="Portfolio">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-item">
                                                <a href="{{ url('single-project.html') }}"><i
                                                        class="fa fa-link"></i></a>
                                                <h2>Project Two</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box template graphic col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img class="img-responsive"
                                            src="{{ asset('assets/images/portfolio-img3.jpg') }}" alt="Portfolio">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-item">
                                                <a href="{{ url('single-project.html') }}"><i
                                                        class="fa fa-link"></i></a>
                                                <h2>Project Three</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box graphic template col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img class="img-responsive"
                                            src="{{ asset('assets/images/portfolio-img4.jpg') }}" alt="Portfolio">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-item">
                                                <a href="{{ url('single-project.html') }}"><i
                                                        class="fa fa-link"></i></a>
                                                <h2>Project Four</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img class="img-responsive"
                                            src="{{ asset('assets/images/portfolio-img5.jpg') }}" alt="Portfolio">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-item">
                                                <a href="{{ url('single-project.html') }}"><i
                                                        class="fa fa-link"></i></a>
                                                <h2>Project Five</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box graphic branding col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img class="img-responsive"
                                            src="{{ asset('assets/images/portfolio-img6.jpg') }}" alt="Portfolio">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-item">
                                                <a href="{{ url('single-project.html') }}"><i
                                                        class="fa fa-link"></i></a>
                                                <h2>Project Six</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Footer section
================================================== -->
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <p class="wow fadeInUp" data-wow-delay="0.3s">Copyright © 2016 Your Company Name - Designed by
                        Tooplate</p>
                    <ul class="social-icon wow fadeInUp" data-wow-delay="0.6s">
                        <li><a class="fa fa-facebook" href="{{ url('#') }}"></a></li>
                        <li><a class="fa fa-twitter" href="{{ url('#') }}"></a></li>
                        <li><a class="fa fa-dribbble" href="{{ url('#') }}"></a></li>
                        <li><a class="fa fa-behance" href="{{ url('#') }}"></a></li>
                        <li><a class="fa fa-google-plus" href="{{ url('#') }}"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

    <!-- Javascript
================================================== -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
