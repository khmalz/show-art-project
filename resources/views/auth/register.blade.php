@extends('auth.layouts.app', ['titlePage' => 'Register'])

@section('content')
    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6 col-md-8 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a class="logo d-flex align-items-center w-auto" href="{{ route('home') }}">
                                    <span class="d-none d-lg-block">Digiworks</span>
                                </a>
                            </div>

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pb-2 pt-4">
                                        <h5 class="card-title fs-4 pb-0 text-center">Create an Account</h5>
                                    </div>

                                    <form class="row g-3" method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="col-12">
                                            <label class="form-label" for="yourName">Name</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend"><i
                                                        class="bx bxs-user"></i></span>
                                                <input class="form-control @error('name') is-invalid @enderror"
                                                    id="yourName" name="name" type="name"
                                                    value="{{ old('name') }}">
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="yourGeneration">Generation</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend1"><i
                                                        class="bx bxs-school"></i></span>
                                                <input
                                                    class="form-control @error('generation_year_1') is-invalid @enderror rounded"
                                                    id="generation_year_1" name="generation_year_1"
                                                    data-old-generation="{{ old('generation_year_1') }}" type="datetime"
                                                    value="{{ old('generation_year_1') }}" min="{{ date('Y') }}"
                                                    autocomplete="off" onchange="fillGen2(this)" />

                                                <div class="input-group-text p-2"
                                                    style="border:none; background-color:transparent;">/</div>

                                                <input class="form-control rounded" id="generation_year_2"
                                                    name="generation_year_2" type="text"
                                                    value="{{ old('generation_year_2') }}" readonly>

                                                @error('generation_year_1')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="yourEmail">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend"><i
                                                        class="bx bx-envelope"></i></span>
                                                <input class="form-control @error('email') is-invalid @enderror"
                                                    id="yourEmail" name="email" type="email"
                                                    value="{{ old('email') }}">
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="yourPassword">Password</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend"><i
                                                        class='bx bxs-lock'></i></span>
                                                <input class="form-control @error('password') is-invalid @enderror"
                                                    id="yourPassword" name="password" type="password">
                                                @error('password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="showPassword" type="checkbox">
                                                    <label class="form-check-label" for="showPassword">
                                                        Show Password
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Already have an account? <a
                                                    href="{{ route('login') }}">Log in</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>
@endsection
