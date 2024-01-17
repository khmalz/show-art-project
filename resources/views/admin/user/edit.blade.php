@extends('dashboard.layouts.main')

@push('styles')
    <link href="{{ asset('assets/admin/vendor/datetime-picker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="pagetitle">
        <h1>User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">User</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit User</h5>
                        <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="form-group mb-3">
                                <label class="col-md-4 col-lg-3 col-form-label" for="name">Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" type="text" value="{{ old('name', $user->name) }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="col-md-4 col-lg-3 col-form-label" for="generation_year_1">Generation</label>
                                <div class="d-flex" style="column-gap: 10px">
                                    <input class="form-control @error('generation_year') is-invalid @enderror rounded"
                                        id="generation_year_1" name="generation_year_1"
                                        data-generation="{{ $user->siswa->generation_year }}"
                                        data-old-generation="{{ old('generation_year_1') }}" type="datetime"
                                        min="{{ date('Y') }}" autocomplete="off" onchange="fillGen2Edit(this)" />
                                    <div class="input-group-text fs-5 p-0"
                                        style="border:none; background-color:transparent;">/
                                    </div>
                                    <input class="form-control rounded" id="generation_year_2" name="generation_year_2"
                                        type="text" value="{{ old('generation_year_2') }}" readonly>
                                </div>
                                @error('generation_year')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="col-md-4 col-lg-3 col-form-label" for="Email">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" id="Email"
                                    name="email" type="email" value="{{ old('email', $user->email) }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="col-md-4 col-lg-3 col-form-label" for="Password">Password (optional)</label>
                                <input class="form-control @error('password') is-invalid @enderror" id="Password"
                                    name="password" type="password">
                                @error('passsword')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div>
                                <button class="btn btn-primary" type="submit">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('assets/admin/vendor/datetime-picker/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/datetime-picker/bootstrap-datetimepicker.id.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            dateTime('#generation_year_1')
            processGenerationData();
        });

        function processGenerationData() {
            const oldGeneration = $('#generation_year_1').data('old-generation');
            const generationData = $('#generation_year_1').data('generation');

            const yearElement = oldGeneration || generationData.split('/')[0];

            $('#generation_year_1').val(yearElement).trigger('change');
        }

        function dateTime(id) {
            $(id).datetimepicker({
                language: 'id',
                todayBtn: true,
                format: "yyyy",
                startView: 'decade',
                minView: 'decade',
                viewSelect: 'decade',
                autoclose: true,
            });
        }

        function fillGen2Edit(input) {
            let year = parseInt(input.value);
            let nextYear = !isNaN(year) ? year + 1 : '';

            document.getElementById('generation_year_2').value = nextYear;
        }
    </script>
@endpush
