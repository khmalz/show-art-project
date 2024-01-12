@extends('layouts.main')

@section('content')
    <header class="flex h-[520px] items-center justify-center bg-no-repeat"
        style="background-image: url({{ asset('assets/img/header-bg.jpg') }});">
        <div
            class="flex flex-col items-center justify-center w-full max-w-md px-5 py-10 text-black bg-white border-2 border-gray-300 rounded gap-y-3 md:max-w-2xl">
            <h3 class="text-3xl font-semibold md:text-5xl">Showcase Project</h3>
            <h5 class="text-lg md:text-xl">RPL - SMKN 46 Jakarta</h5>
        </div>
    </header>

    <main class="container" id="project">
        <div class="flex flex-col items-center mt-10 gap-y-5">
            <h2 class="text-6xl font-thin">Project</h2>
            <h6 class="text-lg">Kumpulan hasil-hasil project dari jurusan RPL</h6>
        </div>

        <div class="flex">
            <div class="grid grid-cols-1 mx-auto mt-10 gap-7 md:grid-cols-2 lg:grid-cols-3">

                {{-- <div class="flex flex-col justify-between max-w-md bg-white border border-gray-200 rounded-lg shadow">
                    <div>
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('assets/img/project/large-your-business.webp') }}"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <div class="mb-2 flex gap-x-2.5">
                                <span class="rounded bg-gray-800 px-2.5 py-0.5 text-xs font-medium text-white">PHP</span>
                                <span
                                    class="rounded bg-gray-800 px-2.5 py-0.5 text-xs font-medium text-white">Laravel</span>
                            </div>

                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                                    technology acquisitions 2024</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology
                                acquisitions of 2021 so far, in reverse chronological order. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>

                    <div class="p-5">
                        <p>By <a class="font-semibold hover:underline" href="#">khmalz</a> | 21 Days ago</p>
                    </div>
                </div> --}}

                @foreach ($projects->take(6) as $project)
                    <div
                        class="flex flex-col justify-between max-w-lg transition-transform duration-500 bg-white border border-gray-200 rounded-lg shadow hover:scale-105">
                        <a href="{{ route('project.show', $project) }}">
                            <div>
                                <img class="object-cover w-full h-64 rounded-t-lg"
                                    src="{{ count($project->images) > 0 ? \Illuminate\Support\Facades\Storage::url($project->images[0]->path) : asset('assets/img/project/large-your-business.webp') }}"
                                    alt="{{ $project->title }}" />
                                <div class="p-5">
                                    <div class="mb-2 flex flex-wrap gap-x-2.5 gap-y-2">
                                        @foreach ($project->tags->take(3) as $index => $tag)
                                            <span
                                                class="rounded bg-gray-800 px-1.5 py-0.5 text-xs font-medium text-white">{{ $tag->name }}</span>
                                            @if ($index == 2 && count($project->tags) > 3)
                                                <span
                                                    class="rounded bg-gray-800 px-2.5 py-0.5 text-xs font-medium text-white">lainnya..
                                                </span>
                                            @endif
                                        @endforeach
                                    </div>
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                        {{ $project->title }}</h5>
                                    <p class="mb-3 font-normal text-gray-700">{!! $project->description !!}</p>
                                </div>
                            </div>
                            <div class="flex flex-col p-5 gap-y-3 md:flex-row md:items-center md:justify-between">
                                <p>By <span class="font-semibold hover:underline" href="#">
                                        {{ $project->developer->name }}</span> |
                                    {{ $project->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>

        <div>
            <a class="block mt-10 text-center text-primary-800 hover:text-primary-900 hover:underline" href="#">Lihat
                Selengkapnya..</a>
        </div>
    </main>
@endsection
