@extends('layouts.main')

@section('content')
    <header class="flex h-[520px] items-center justify-center bg-no-repeat"
        style="background-image: url({{ asset('assets/img/header-bg.jpg') }});">
        <div
            class="flex w-full max-w-md flex-col items-center justify-center gap-y-3 rounded border-2 border-gray-300 bg-white px-5 py-10 text-black md:max-w-2xl">
            <h3 class="text-3xl font-semibold md:text-5xl">Showcase Project</h3>
            <h5 class="text-lg md:text-xl">RPL - SMKN 46 Jakarta</h5>
        </div>
    </header>

    <main class="container" id="project">
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
                                    src="{{ \Illuminate\Support\Facades\Storage::url($project->images[0]->path) }}"
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
                            <div class="flex flex-col gap-y-3 p-5 md:flex-row md:items-center md:justify-between">
                                <p>By <a class="font-semibold hover:underline"
                                        data-tooltip-target="tooltip-default{{ $loop->iteration }}"
                                        data-tooltip-placement="bottom"
                                        href="{{ route('project.index', ['searchBy' => 'developer', 'developer' => $project->developer->name]) }}">
                                        {{ $project->developer->name }}</a> |
                                    {{ $project->created_at->diffForHumans() }}

                                <div class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-1.5 py-2 text-xs font-medium text-white opacity-0 shadow-sm transition-opacity duration-300"
                                    id="tooltip-default{{ $loop->iteration }}" role="tooltip">
                                    see their project
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>

                                </p>

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
