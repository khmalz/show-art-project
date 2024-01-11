@extends('layouts.main', ['grayBg' => true])

@section('content')
    <div class="container pt-5">
        <div class="grid w-full grid-cols-1 gap-x-10 gap-y-3 lg:grid-cols-5">
            <div class="lg:col-span-3">
                @if (count($project->images) > 0 && count($project->images) < 2)
                    <a class="project-lightbox"
                        href="{{ \Illuminate\Support\Facades\Storage::url($project->images[0]->path) }}">
                        <img class="object-cover w-full h-72 lg:h-96"
                            src="{{ \Illuminate\Support\Facades\Storage::url($project->images[0]->path) }}" alt="image 1">
                    </a>
                @else
                    <div class="grid w-full mt-5" id="controls-carousel" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-80 overflow-hidden rounded-lg lg:h-[400px]">
                            @if (count($project->images) > 1)
                                @foreach ($project->images as $image)
                                    <a class="hidden p-1 duration-700 ease-in-out project-lightbox" data-carousel-item
                                        href="{{ \Illuminate\Support\Facades\Storage::url($image->path) }}">
                                        <img class="object-cover w-full h-72 lg:h-96"
                                            src="{{ \Illuminate\Support\Facades\Storage::url($image->path) }}"
                                            alt="image 1">
                                    </a>
                                @endforeach
                            @else
                                <a class="hidden p-1 duration-700 ease-in-out project-lightbox" data-carousel-item
                                    href="{{ asset('assets/img/project/large-your-business.webp') }}">
                                    <img class="object-cover w-full h-72 lg:h-96"
                                        src="{{ asset('assets/img/project/large-your-business.webp') }}" alt="image 1">
                                </a>
                                <a class="hidden p-1 duration-700 ease-in-out project-lightbox" data-carousel-item
                                    href="{{ asset('assets/img/project/large-your-business.webp') }}">
                                    <img class="object-cover w-full h-72 lg:h-96"
                                        src="{{ asset('assets/img/project/web-design.jpg') }}" alt="image 1">
                                </a>
                            @endif
                        </div>

                        <!-- Slider controls -->
                        <div class="flex p-1 space-x-2">
                            <button class="flex items-center justify-center h-full cursor-pointer group focus:outline-none"
                                data-carousel-prev type="button">
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 bg-black/20 group-hover:bg-black/10 group-focus:outline-none group-focus:ring-black">
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4" />
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button class="flex items-center justify-center h-full cursor-pointer group focus:outline-none"
                                data-carousel-next type="button">
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 bg-black/20 group-hover:bg-black/10 group-focus:outline-none group-focus:ring-black">
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>
                    </div>
                @endif
            </div>
            <div class="w-full p-5 bg-white border shadow-sm lg:col-span-2">
                <h6 class="mb-8 text-sm font-semibold">{{ $project->developer->name }}</h6>
                <h3 class="mb-1 text-xl">{{ $project->title }}</h3>
                <div class="mb-6 flex gap-x-2.5">
                    @foreach ($project->tags as $tag)
                        <span
                            class="rounded bg-gray-800 px-2.5 py-0.5 text-xs font-medium text-white">{{ $tag->name }}</span>
                    @endforeach
                </div>
                {!! $project->description !!}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const portfolioLightbox = GLightbox({
                selector: '.project-lightbox'
            });
        });
    </script>
@endpush
