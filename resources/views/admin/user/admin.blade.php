@extends('dashboard.layouts.main')

@section('content')
    <div class="pagetitle">
        <h1>Admin Account</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Admin Account</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Admin Account</h5>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalUpdate"
                                type="button">
                                Update
                            </button>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" id="name" name="name" type="text"
                                value="{{ old('name', $admin->name) }}" readonly>
                        </div>
                    </div>
                    <div class="modal fade" id="modalUpdate" aria-labelledby="modalUpdateLabel" aria-hidden="true"
                        tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalUpdateLabel">Edit Password Admin
                                    </h5>
                                </div>
                                <form class="d-inline" action="{{ route('admin.account.update', $admin) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="name">Name</label>
                                            <input class="form-control" id="name" type="text"
                                                value="{{ $admin->name }}" readonly>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="password-admin">Password
                                            </label>
                                            <input class="form-control @error('password') is-invalid @enderror"
                                                id="password-admin" name="password" type="password">
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="col-12 mt-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="showPassword" type="checkbox">
                                                    <label class="form-check-label" for="showPassword">
                                                        Show Password
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-bs-dismiss="modal"
                                            type="button">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            $('#showPassword').click(function() {
                if ($(this).is(':checked')) {
                    $('#password-admin').attr('type', 'text');
                } else {
                    $('#password-admin').attr('type', 'password');
                }
            });
        });
    </script>
@endpush
