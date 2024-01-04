@extends('layouts.main')

@section('content')
    <!-- Start Banner Hero -->
    <div class="carousel slide" id="template-mo-zay-hero-carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 custom-box text-center">
                            <h1 class="h1" style="font-weight: 400 !important">Showcase Project</h1>
                            <p>RPL - SMKN 46 Jakarta</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Project -->
    <section>
        <div class="container py-5">
            <div class="row py-3 text-center">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Project</h1>
                    <p>
                        Kumpulan hasil-hasil project dari jurusan RPL
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{ url('shop-single.html') }}">
                            <img class="card-img-top" src="{{ asset('/./assets/img/feature_prod_01.jpg') }}" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted fw-semibold text-right">Orang 2</li>
                            </ul>
                            <a class="h2 text-decoration-none text-dark" href="{{ url('shop-single.html') }}">Gym
                                Weight</a>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia
                                deserunt.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{ url('shop-single.html') }}">
                            <img class="card-img-top" src="{{ asset('/./assets/img/feature_prod_02.jpg') }}" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted fw-semibold text-right">Orang 2</li>
                            </ul>
                            <a class="h2 text-decoration-none text-dark" href="{{ url('shop-single.html') }}">Cloud
                                Nike Shoes</a>
                            <p class="card-text">
                                Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo
                                ullamcorper.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{ url('shop-single.html') }}">
                            <img class="card-img-top" src="{{ asset('/./assets/img/feature_prod_03.jpg') }}" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted fw-semibold text-right">Orang 2</li>
                            </ul>
                            <a class="h2 text-decoration-none text-dark" href="{{ url('shop-single.html') }}">Summer
                                Addides Shoes</a>
                            <p class="card-text">
                                Curabitur ac mi sit amet diam luctus porta. Phasellus pulvinar sagittis diam, et
                                scelerisque ipsum lobortis nec.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Project -->
@endsection
