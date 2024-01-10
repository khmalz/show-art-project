@extends('dashboard.layouts.main')

@section('content')
    <div class="pagetitle">
        <h1>Register Toggle</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Register Toggle</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Register Toggle</h5>

                        <form action="{{ route('admin.register-toggle.update') }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="d-flex justify-content-between align-items-center">
                                <p>Register Toggle</p>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" id="flexSwitchCheckDefault" name="toggle"
                                        type="checkbox" value="1" role="switch"
                                        {{ $registerActive ? 'checked' : '' }}>
                                </div>
                            </div>

                            <button class="btn btn-primary btn-sm" type="submit">Update</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
