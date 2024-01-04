@extends('auth.layouts.app', ['titlePage' => 'Login'])

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card-group d-block d-md-flex row">
                <div class="card col-md-7 mb-0 p-4">
                    <div class="card-body">
                        <h1>Login</h1>
                        <p class="text-medium-emphasis">Sign In to your account</p>
                        @if (session('fail'))
                            <div class="alert alert-danger py-2">
                                {{ session('fail') }}
                            </div>
                        @endif
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <svg class="icon">
                                        <use
                                            xlink:href="{{ asset('assets/admin/vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}">
                                        </use>
                                    </svg></span>
                                <input class="form-control" name="email" type="email" placeholder="Email" autofocus
                                    autocomplete="email" />
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <svg class="icon">
                                        <use
                                            xlink:href="{{ asset('assets/admin/vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}">
                                        </use>
                                    </svg></span>
                                <input class="form-control" name="password" type="password" placeholder="Password"
                                    autocomplete="current-password" />
                            </div>
                            <button class="btn btn-block btn-info text-white" type="submit">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
                <div class="card col-md-5 bg-primary py-5 text-white">
                    <div class="card-body text-center">
                        <div>
                            <h2>Sign up</h2>
                            <p>Doesn't have an account?</p>
                            <a class="btn btn-outline-light mt-3" type="button" href="{{ route('register') }}">Register
                                Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
