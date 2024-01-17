@extends('layouts.main')

@section('content')
    <header class="flex h-[520px] items-center justify-center bg-no-repeat"
        style="background-image: url({{ asset('assets/img/header-bg.jpg') }});">
        <div
            class="flex w-full max-w-md flex-col items-center justify-center gap-y-3 rounded border-2 border-gray-300 bg-white px-5 py-10 text-black md:max-w-2xl">
            <h3 class="text-3xl font-semibold md:text-5xl">Digiworks</h3>
            <h5 class="text-lg md:text-xl">SE - SMKN 46 Jakarta</h5>
        </div>
    </header>

    <div class="container" id="about">
        <div class="mt-10 flex flex-col items-center gap-y-5">
            <h2 class="text-6xl font-thin">About</h2>
            <h6 class="text-lg">About Us - Digiworks 46</h6>
            <div class="grid grid-cols-1 items-center justify-between space-x-5 space-y-5 lg:grid-cols-2 lg:space-y-0">
                <div class="flex flex-col space-y-3">
                    <p class="text-justify text-xl font-medium">
                        Welcome to our digital platform!
                    </p>
                    <p class="text-justify">
                        We present a variety of recent projects from students majoring in
                        Software Engineering (SE) at SMK Negeri 46 Jakarta.
                    </p>
                    <p class="text-justify">
                        Through this platform, our goal is to
                        facilitate the
                        exploration of students' creativity and achievements in various aspects of IT, including the
                        development of
                        mobile applications, software solutions, and other projects. From complex coding to appealing user
                        interface
                        designs, we showcase a diverse range of projects as a reflection of the dedication, hard work, and
                        technical
                        skills of our students. Join us in exploring the ever-evolving world of digital innovation from the
                        next
                        generation in the field of Information Technology.
                    </p>
                </div>
                <div class="flex p-2">
                    <img class="rounded border shadow-lg lg:w-[600px]" src="{{ asset('assets/img/about/workspace.jpg') }}"
                        alt="workspace digital">
                </div>
            </div>
        </div>
    </div>

    <main class="container mb-5" id="project">
        <div class="mt-10 flex flex-col items-center gap-y-5">
            <h2 class="text-6xl font-thin">Project</h2>
            <h6 class="text-lg">Kumpulan hasil-hasil project dari jurusan RPL</h6>
        </div>

        @if ($projects->isNotEmpty())
            <div class="flex">
                <div class="mx-auto mt-10 grid grid-cols-1 gap-7 md:grid-cols-2 lg:grid-cols-3">

                    @foreach ($projects as $project)
                        <div
                            class="flex max-w-lg flex-col justify-between rounded-lg border border-gray-200 bg-white shadow transition-transform duration-500 hover:scale-105">
                            <a href="{{ route('project.show', $project) }}">
                                <img class="h-64 w-full rounded-t-lg object-cover"
                                    src="{{ asset('assets/img/' . $project->images[0]->path) }}"
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
                                </div>
                            </a>
                            <div class="flex flex-col space-y-1 p-5">
                                <p>By <a class="font-semibold hover:underline"
                                        data-tooltip-target="tooltip-default{{ $loop->iteration }}"
                                        data-tooltip-placement="bottom"
                                        href="{{ route('project.index', ['searchBy' => 'developer', 'developer' => $project->developer->name]) }}">
                                        {{ $project->developer->name }}</a> | Generation
                                    {{ $project->developer->siswa->generation_year }}

                                <div class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-1.5 py-2 text-xs font-medium text-white opacity-0 shadow-sm transition-opacity duration-300"
                                    id="tooltip-default{{ $loop->iteration }}" role="tooltip">
                                    see their project
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                                </p>

                                <p>{{ $project->created_at->diffForHumans() }}</p>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <div>
                <a class="mt-10 block text-center text-primary-800 hover:text-primary-900 hover:underline"
                    href="{{ route('project.index') }}">Lihat
                    Selengkapnya..</a>
            </div>
        @else
            <div>
                <p class="mt-10 block text-center text-2xl font-medium text-rose-400 hover:text-rose-500">Data Not Found
                </p>
            </div>
        @endif
    </main>
@endsection
