@extends('layouts.main')

@section('content')
    <div class="container mt-3">
        <div class="flex space-x-10">
            <div class="hidden w-1/5 lg:block">
                <div class="h-full w-full border-r-2 border-gray-200/75 p-3 shadow-sm">
                    <div class="flex items-center justify-between">
                        <p>Filter By: </p>
                        <a class="text-sm text-primary-700" href="{{ route('my-project') }}">Reset all filters</a>
                    </div>
                    <div>
                        <form method="GET">
                            <div class="mb-5">
                                <div id="titleInput">
                                    <label class="mb-2 block text-sm font-medium text-gray-900" for="title">Title</label>
                                    <input
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 selection:bg-primary-500 selection:text-white focus:border-primary-500 focus:ring-primary-500"
                                        id="title" name="title" type="text" value="{{ request('title') }}"
                                        placeholder="Title">
                                </div>
                            </div>
                            <div class="mb-5">
                                <h6 class="mb-2 font-medium">
                                    Language/Framework</h6>
                                <select class="block w-full cursor-pointer rounded-sm focus:outline-none"
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
                                    class="rounded-md bg-primary-700 px-4 py-2 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300"
                                    type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-4/5">
                <div class="mt-5 w-full">
                    <h3 class="text-2xl font-semibold text-primary-600">List Your Project</h3>
                </div>
                <div class="mt-3 flex w-full justify-between self-baseline lg:justify-end">
                    <button
                        class="mb-2 me-2 block rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 lg:hidden"
                        data-drawer-target="drawer-contact" data-drawer-show="drawer-contact" type="button"
                        aria-controls="drawer-contact">Filter</button>
                    <a class="mb-2 me-2 rounded-lg bg-primary-600 px-4 py-2.5 text-sm font-medium text-white hover:bg-primary-700 focus:outline-none focus:ring-4 focus:ring-primary-300"
                        href="{{ route('project.create') }}">Add your project</a>
                </div>
                <div class="fixed left-0 top-0 z-40 h-screen w-1/2 -translate-x-full overflow-y-auto bg-white p-4 transition-transform"
                    id="drawer-contact" aria-labelledby="drawer-contact-label" tabindex="-1">
                    <h5 class="mb-6 mt-4 inline-flex items-center text-base font-semibold uppercase text-gray-500"
                        id="drawer-label">
                        Filter
                    </h5>
                    <button
                        class="absolute end-2.5 top-2.5 inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900"
                        data-drawer-hide="drawer-contact" type="button" aria-controls="drawer-contact">
                        <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
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
                                    <label class="mb-2 block text-sm font-medium text-gray-900" for="title">Title</label>
                                    <input
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 selection:bg-primary-500 selection:text-white focus:border-primary-500 focus:ring-primary-500"
                                        id="title" name="title" type="text" value="{{ request('title') }}"
                                        placeholder="Title">
                                </div>
                            </div>
                            <div class="mb-5">
                                <h6 class="mb-2 font-medium">Language/Framework</h6>
                                <select class="block w-full cursor-pointer rounded-sm focus:outline-none"
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

                <div class="mb-8 mt-5 flex flex-col">
                    @if ($projects->isEmpty())
                        <div class="mt-3 w-full rounded border bg-white p-4 text-center shadow">
                            Data Not Found
                        </div>
                    @else
                        <div class="mx-auto grid grid-cols-1 gap-4 md:mx-0 md:grid-cols-2 xl:grid-cols-3">
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
                                    <div class="flex flex-col gap-y-3 p-5 md:flex-row md:items-center md:justify-between">
                                        <p class="text-sm">By <span class="font-semibold">
                                                You</span> |
                                            {{ $project->created_at->diffForHumans() }}

                                        </p>
                                        <div class="flex items-center gap-x-1.5">
                                            <a class="self-baseline rounded-lg bg-primary-700 px-4 py-2 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300"
                                                href="{{ route('project.edit', $project) }}">Edit</a>
                                            <form action="{{ route('project.destroy', $project) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a class="cursor-pointer self-baseline rounded-lg bg-rose-700 px-4 py-2 text-sm font-medium text-white hover:bg-rose-800 focus:outline-none focus:ring-4 focus:ring-rose-300"
                                                    onclick="return confirm('Are you sure you want to delete?') ? this.parentElement.submit() : null">Delete</a>
                                            </form>
                                        </div>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let tomSelectLangFrame = new TomSelect('#langframew-select', {
                allowEmptyOption: true,
                sortField: {
                    field: "text",
                    direction: "asc"
                },
            });
            let tomSelectLangDrawFrame = new TomSelect('#langframewdraw-select', {
                allowEmptyOption: true,
                sortField: {
                    field: "text",
                    direction: "asc"
                },
            });

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
