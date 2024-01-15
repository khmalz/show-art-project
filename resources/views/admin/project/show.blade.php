@extends('dashboard.layouts.main')

@push('styles')
    <link href="{{ asset('assets/admin/vendor/datetime-picker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="pagetitle">
        <h1>Project</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Project</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <h5 class="card-title mb-0 pb-0">Project Detail | by {{ $project->developer->name }}</h5>
                            <small>
                                <p class="text-muted m-0 p-0">Date :
                                    <span class="fw-semibold">{{ $project->created_at->format('d F Y') }}</span>
                                </p>
                            </small>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="text-dark text-capitalize fw-bold mb-2">Title</div>
                                <small>
                                    <p class="text-dark mb-0">{{ $project->title }}</p>
                                </small>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="text-dark text-capitalize fw-bold mb-2">Description</div>
                                <small>
                                    <p class="text-dark mb-0">{!! $project->description !!}</p>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        @if ($project->images->count() > 0)
                            <div class="row mb-4">
                                <div class="col-12">
                                    <div class="text-dark text-capitalize fw-bold mb-2">Images</div>
                                    <div class="row" style="row-gap: 10px">
                                        @foreach ($project->images as $image)
                                            <div class="col-md-6 col-lg-4">
                                                <div style="width: 100%; height: 250px;">
                                                    <img class="img-fluid img-thumbnail w-100 h-100 border border-2"
                                                        src="{{ asset('assets/img/' . $image->path) }}"
                                                        alt="gambar bukti {{ $loop->iteration }}"
                                                        style="object-fit:  cover">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
