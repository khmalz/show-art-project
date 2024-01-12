@extends('layouts.main')

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet" />
@endpush

@section('content')
    <div class="container mt-3">
        <div class="flex space-x-10">
            <div class="hidden w-1/5 lg:block">
                <div class="w-full h-full p-3 border-r-2 shadow-sm border-gray-200/75">
                    <div class="flex items-center justify-between">
                        <p>Filter By: </p>
                        <a class="text-sm text-primary-700" href="{{ route('my-project') }}">Reset all filters</a>
                    </div>
                    <div>
                        <form method="GET">
                            <div class="mb-5">
                                <div id="titleInput">
                                    <label class="block mb-2 text-sm font-medium text-gray-900" for="title">Title</label>
                                    <input
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 selection:bg-primary-500 selection:text-white focus:border-primary-500 focus:ring-primary-500"
                                        id="title" name="title" type="text" value="{{ request('title') }}"
                                        placeholder="Title">
                                </div>
                            </div>
                            <div class="mb-5">
                                <h6 class="mb-2 font-medium">
                                    Language/Framework</h6>
                                <select class="block w-full rounded-sm cursor-pointer focus:outline-none"
                                    id="langframew-select" name="tags[]"
                                    data-tags="{{ request('tags') ? implode(',', request('tags')) : '' }}" multiple
                                    placeholder="Select language/framework..." autocomplete="off" multiple>
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-5">
                                <button
                                    class="px-4 py-2 text-sm font-medium text-center text-white rounded-md bg-primary-700 hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300"
                                    type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-4/5">
                <div class="flex justify-between w-full mt-5 self-baseline lg:justify-end">
                    <button
                        class="mb-2 me-2 block rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 lg:hidden"
                        data-drawer-target="drawer-contact" data-drawer-show="drawer-contact" type="button"
                        aria-controls="drawer-contact">Filter</button>
                    <a class="mb-2 me-2 rounded-lg bg-primary-600 px-4 py-2.5 text-sm font-medium text-white hover:bg-primary-700 focus:outline-none focus:ring-4 focus:ring-primary-300"
                        href="{{ route('project.create') }}">Add your project</a>
                </div>
                <div class="fixed top-0 left-0 z-40 w-1/2 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white"
                    id="drawer-contact" aria-labelledby="drawer-contact-label" tabindex="-1">
                    <h5 class="inline-flex items-center mt-4 mb-6 text-base font-semibold text-gray-500 uppercase"
                        id="drawer-label">
                        Filter
                    </h5>
                    <button
                        class="absolute end-2.5 top-2.5 inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900"
                        data-drawer-hide="drawer-contact" type="button" aria-controls="drawer-contact">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close menu</span>
                    </button>
                    <form class="mb-6" method="GET">
                        <a class="text-blue-700 hover:text-blue-800" href="{{ route('my-project') }}">Reset all
                            filters</a>
                        <div class="mt-5">
                            <div class="mb-5">
                                <div id="titleInputDrawer">
                                    <label class="block mb-2 text-sm font-medium text-gray-900" for="title">Title</label>
                                    <input
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 selection:bg-primary-500 selection:text-white focus:border-primary-500 focus:ring-primary-500"
                                        id="title" name="title" type="text" value="{{ request('title') }}"
                                        placeholder="Title">
                                </div>
                            </div>
                            <div class="mb-5">
                                <h6 class="mb-2 font-medium">Language/Framework</h6>
                                <select class="block w-full rounded-sm cursor-pointer focus:outline-none"
                                    id="langframewdraw-select" name="tags[]" multiple
                                    placeholder="Select language/framework..." autocomplete="off" multiple>
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button
                            class="mb-2 mt-5 block w-full rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
                            type="submit">Search</button>
                    </form>
                </div>

                <div class="flex flex-col mt-5 mb-8">
                    @if ($projects->isEmpty())
                        <div class="w-full p-4 mt-3 text-center bg-white border rounded shadow">
                            Data Not Found
                        </div>
                    @else
                        <div class="grid grid-cols-1 mx-auto gap-7 lg:grid-cols-2">
                            @foreach ($projects as $project)
                                <div
                                    class="flex flex-col justify-between max-w-lg transition-transform duration-500 bg-white border border-gray-200 rounded-lg shadow hover:scale-105">
                                    <a href="{{ route('project.show', $project) }}">
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
                                    </a>
                                    <div class="flex flex-col p-5 gap-y-3 md:flex-row md:items-center md:justify-between">
                                        <p>By <span class="font-semibold">
                                                You</span> |
                                            {{ $project->created_at->diffForHumans() }}

                                        </p>
                                        @if (request()->routeIs('my-project'))
                                            <div>
                                                <a class="mb-2 rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300"
                                                    href="{{ route('project.edit', $project) }}">Edit</a>
                                                <form class="inline-block"
                                                    action="{{ route('project.destroy', $project) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a class="mb-2 cursor-pointer rounded-lg bg-red-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300"
                                                        onclick="return confirm('Are you sure you want to delete?') ? this.parentElement.submit() : null">Delete</a>
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>

    <script>
        let tomSelectLangFrame = new TomSelect('#langframew-select', {
            allowEmptyOption: true,
        });
        let tomSelectLangDrawFrame = new TomSelect('#langframewdraw-select', {
            allowEmptyOption: true,
        });

        document.addEventListener('DOMContentLoaded', function() {
            const tags = $("#langframew-select").data('tags');

            if (tags) {
                let tagsArray;

                if (typeof tags === 'string') {
                    tagsArray = tags.split(',').map(tag => parseInt(tag));
                } else {
                    tagsArray = [parseInt(tags)];
                }

                tomSelectLangFrame.setValue(tagsArray)
                tomSelectLangDrawFrame.setValue(tagsArray)
            }
        })
    </script>
@endpush
