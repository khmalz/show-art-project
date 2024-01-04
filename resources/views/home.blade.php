@extends('layouts.main')

@section('content')
    <section class="header-one" id="header">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
                    <div class="header-thumb">
                        <h1 class="wow fadeIn" data-wow-delay="1.6s">Showcase Project</h1>
                        <h3 class="wow fadeInUp" data-wow-delay="1.9s">RPL - SMKN 46 Jakarta</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

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
                            <li><a class="opc-main-bg" data-filter=".photoshop" href="{{ url('#') }}">Photoshop</a>
                            </li>
                            <li><a class="opc-main-bg" data-filter=".branding" href="{{ url('#') }}">Branding</a>
                            </li>
                        </ul>

                        <!-- iso box section -->
                        <div class="iso-box-section wow fadeInUp" data-wow-delay="1s">
                            <div class="iso-box-wrapper col4-iso-box">

                                <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img class="img-responsive" src="{{ asset('assets/images/portfolio-img1.jpg') }}"
                                            alt="Portfolio">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-item">
                                                <a href="{{ url('single-project.html') }}"><i class="fa fa-link"></i></a>
                                                <h2>Project One</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box graphic template col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img class="img-responsive" src="{{ asset('assets/images/portfolio-img2.jpg') }}"
                                            alt="Portfolio">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-item">
                                                <a href="{{ url('single-project.html') }}"><i class="fa fa-link"></i></a>
                                                <h2>Project Two</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box template graphic col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img class="img-responsive" src="{{ asset('assets/images/portfolio-img3.jpg') }}"
                                            alt="Portfolio">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-item">
                                                <a href="{{ url('single-project.html') }}"><i class="fa fa-link"></i></a>
                                                <h2>Project Three</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box graphic template col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img class="img-responsive" src="{{ asset('assets/images/portfolio-img4.jpg') }}"
                                            alt="Portfolio">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-item">
                                                <a href="{{ url('single-project.html') }}"><i class="fa fa-link"></i></a>
                                                <h2>Project Four</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img class="img-responsive" src="{{ asset('assets/images/portfolio-img5.jpg') }}"
                                            alt="Portfolio">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-item">
                                                <a href="{{ url('single-project.html') }}"><i class="fa fa-link"></i></a>
                                                <h2>Project Five</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box graphic branding col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img class="img-responsive" src="{{ asset('assets/images/portfolio-img6.jpg') }}"
                                            alt="Portfolio">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-item">
                                                <a href="{{ url('single-project.html') }}"><i class="fa fa-link"></i></a>
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
@endsection
