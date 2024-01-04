@extends('auth.layouts.app', ['titlePage' => 'Register'])

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4 mb-4">
                <div class="card-body p-4">
                    <h1>Register</h1>
                    <p class="text-medium-emphasis">Create your account</p>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3"><span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-user">
                                    </use>
                                </svg></span>
                            <input class="form-control" name="name" type="name" placeholder="Name" autocomplete="name"
                                autofocus />
                        </div>
                        <div class="input-group mb-3"><span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-envelope-open">
                                    </use>
                                </svg></span>
                            <input class="form-control" name="email" type="email" placeholder="Email"
                                autocomplete="email" />
                        </div>
                        <div class="input-group mb-3"><span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-lock-locked">
                                    </use>
                                </svg></span>
                            <input class="form-control" name="password" type="password" placeholder="Password"
                                autocomplete="new-password" />
                        </div>
                        <div class="input-group mb-4"><span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-lock-locked">
                                    </use>
                                </svg></span>
                            <input class="form-control" name="password_confirmation" type="password" placeholder="Password"
                                autocomplete="new-password" />
                        </div>
                        <div class="mb-3">
                            <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
                        </div>
                        <button class="btn btn-block btn-success" type="button">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
