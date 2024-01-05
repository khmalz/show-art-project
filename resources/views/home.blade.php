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
                        <a href="{{ route('project.show') }}">
                            <img class="card-img-top" src="{{ asset('assets/img/project/large-your-business.webp') }}"
                                alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted fw-semibold text-right">Orang 1</li>
                            </ul>
                            <ul class="list-unstyled d-flex gap-2">
                                <li class="text-muted fw-semibold text-right"><span class="badge bg-dark">Tailwind
                                        CSS</span></li>
                                <li class="text-muted fw-semibold text-right"><span class="badge bg-dark">Javascript</span>
                                </li>
                                <li class="text-muted fw-semibold text-right"><span class="badge bg-dark">React JS</span>
                                </li>
                            </ul>
                            <a class="h2 text-decoration-none text-dark" href="{{ route('project.show') }}">Gym
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
                        <a href="{{ route('project.show') }}">
                            <img class="card-img-top" src="{{ asset('assets/img/project/project-management.png') }}"
                                alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted fw-semibold text-right">Orang 3</li>
                            </ul>
                            <ul class="list-unstyled d-flex gap-2">
                                <li class="text-muted fw-semibold text-right"><span class="badge bg-dark">Tailwind
                                        CSS</span></li>
                                <li class="text-muted fw-semibold text-right"><span class="badge bg-dark">Javascript</span>
                                </li>
                                <li class="text-muted fw-semibold text-right"><span class="badge bg-dark">React JS</span>
                                </li>
                            </ul>
                            <a class="h2 text-decoration-none text-dark" href="{{ route('project.show') }}">Gym
                                Weight</a>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur, perspiciatis?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{ route('project.show') }}">
                            <img class="card-img-top" src="{{ asset('assets/img/project/project-manager.png') }}"
                                alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted fw-semibold text-right">Orang 2</li>
                            </ul>
                            <ul class="list-unstyled d-flex gap-2">
                                <li class="text-muted fw-semibold text-right"><span class="badge bg-dark">Tailwind
                                        CSS</span></li>
                                <li class="text-muted fw-semibold text-right"><span class="badge bg-dark">Javascript</span>
                                </li>
                                <li class="text-muted fw-semibold text-right"><span class="badge bg-dark">React JS</span>
                                </li>
                            </ul>
                            <a class="h2 text-decoration-none text-dark" href="{{ route('project.show') }}">Gym
                                Weight</a>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut quasi possimus facere, cumque
                                minus perferendis dolores.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{ route('project.show') }}">
                            <img class="card-img-top" src="{{ asset('assets/img/project/web-design.jpg') }}"
                                alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted fw-semibold text-right">Orang 1</li>
                            </ul>
                            <ul class="list-unstyled d-flex gap-2">
                                <li class="text-muted fw-semibold text-right"><span class="badge bg-dark">Tailwind
                                        CSS</span></li>
                                <li class="text-muted fw-semibold text-right"><span class="badge bg-dark">Javascript</span>
                                </li>
                                <li class="text-muted fw-semibold text-right"><span class="badge bg-dark">React JS</span>
                                </li>
                            </ul>
                            <a class="h2 text-decoration-none text-dark" href="{{ route('project.show') }}">Gym
                                Weight</a>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga temporibus repellat amet
                                vitae?
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <div>
                    <button class="btn btn-info text-white">Lihat lainnya</button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Project -->
@endsection
