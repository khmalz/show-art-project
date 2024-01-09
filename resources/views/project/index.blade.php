@extends('layouts.main')

@section('content')
    <div class="container mt-3">
        <div class="flex space-x-10">
            <div class="hidden w-1/5 lg:block">
                <div class="w-full h-full p-3 border-r-2 shadow-sm border-gray-200/75">
                    <div class="flex items-center justify-between">
                        <p>Filter By: </p>
                        <a class="text-sm text-primary-700" href="{{ route('project.index') }}">Reset all filters</a>
                    </div>
                    <div>
                        <form method="GET">
                            <div class="mt-3 mb-5">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="selectSearch">Select
                                    an option to search</label>
                                <select
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500"
                                    id="selectSearch" onclick="filterInput(this)">
                                    <option value="title" selected>Title</option>
                                    <option value="developer">Developer</option>
                                </select>
                            </div>
                            <div class="mb-5">
                                <div id="titleInput">
                                    <label class="block mb-2 text-sm font-medium text-gray-900" for="title">Title</label>
                                    <input
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 selection:bg-primary-500 selection:text-white focus:border-primary-500 focus:ring-primary-500"
                                        id="title" name="title" type="text" placeholder="Title">
                                </div>

                                <div class="hidden" id="developerInput">
                                    <label class="block mb-2 text-sm font-medium text-gray-900"
                                        for="developer">Developer</label>
                                    <input
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 selection:bg-primary-500 selection:text-white focus:border-primary-500 focus:ring-primary-500"
                                        id="developer" name="developer" type="text" placeholder="Developer">
                                </div>
                            </div>
                            <div class="mb-5">
                                <h6 class="mb-2 font-medium">Framework</h6>
                                <div class="flex items-center mb-4">
                                    <input
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-2 focus:ring-primary-500"
                                        id="laravel-checkbox" type="checkbox" value="">
                                    <label
                                        class="text-sm font-medium text-gray-900 ms-2 selection:bg-primary-500 selection:text-white"
                                        for="laravel-checkbox">Laravel</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-2 focus:ring-primary-500"
                                        id="react-checkbox" type="checkbox" value="">
                                    <label
                                        class="text-sm font-medium text-gray-900 ms-2 selection:bg-primary-500 selection:text-white"
                                        for="react-checkbox">React</label>
                                </div>
                            </div>
                            <div class="mb-5">
                                <h6 class="mb-2 font-medium">Language</h6>
                                <div class="flex items-center mb-4">
                                    <input
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-2 focus:ring-primary-500"
                                        id="javascript-checkbox" type="checkbox" value="">
                                    <label
                                        class="text-sm font-medium text-gray-900 ms-2 selection:bg-primary-500 selection:text-white"
                                        for="javascript-checkbox">Javascript</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-2 focus:ring-primary-500"
                                        id="php-checkbox" type="checkbox" value="">
                                    <label
                                        class="text-sm font-medium text-gray-900 ms-2 selection:bg-primary-500 selection:text-white"
                                        for="php-checkbox">PHP</label>
                                </div>
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
                <div class="flex lg:hidden">
                    <div class="mx-auto mt-5">
                        <button
                            class="px-4 py-2 text-sm font-medium text-center text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-4 focus:ring-blue-300"
                            data-drawer-target="drawer-contact" data-drawer-show="drawer-contact" type="button"
                            aria-controls="drawer-contact">Filter</button>
                    </div>
                    <div class="fixed top-0 left-0 z-40 w-1/2 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white"
                        id="drawer-contact" aria-labelledby="drawer-contact-label" tabindex="-1">
                        <h5 class="inline-flex items-center mb-6 text-base font-semibold text-gray-500 uppercase"
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
                            <a class="text-blue-700 hover:text-blue-800" href="{{ route('project.index') }}">Reset all
                                filters</a>
                            <div class="mt-5">
                                <div class="mt-3 mb-5">
                                    <label class="block mb-2 text-sm font-medium text-gray-900"
                                        for="selectSearchDrawer">Select
                                        an option to search</label>
                                    <select
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                        id="selectSearchDrawer" onclick="filterInput(this, true)">
                                        <option value="title" selected>Title</option>
                                        <option value="developer">Developer</option>
                                    </select>
                                </div>
                                <div class="mb-5">
                                    <div id="titleInputDrawer">
                                        <label class="block mb-2 text-sm font-medium text-gray-900"
                                            for="title">Title</label>
                                        <input
                                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 selection:bg-blue-500 selection:text-white focus:border-blue-500 focus:ring-blue-500"
                                            id="title" name="title" type="text" placeholder="Title">
                                    </div>

                                    <div class="hidden" id="developerInputDrawer">
                                        <label class="block mb-2 text-sm font-medium text-gray-900"
                                            for="developer">Developer</label>
                                        <input
                                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 selection:bg-blue-500 selection:text-white focus:border-blue-500 focus:ring-blue-500"
                                            id="developer" name="developer" type="text" placeholder="Developer">
                                    </div>
                                </div>
                                <h6 class="mb-2 font-medium">Framework</h6>
                                <div class="flex items-center mb-4">
                                    <input
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-blue-500"
                                        id="laravel-checkbox-drawer" type="checkbox" value="">
                                    <label class="text-sm font-medium text-gray-900 ms-2"
                                        for="laravel-checkbox-drawer">Laravel</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-blue-500"
                                        id="react-checkbox-drawer" type="checkbox" value="">
                                    <label class="text-sm font-medium text-gray-900 ms-2"
                                        for="react-checkbox-drawer">React</label>
                                </div>
                            </div>
                            <div class="mt-5">
                                <h6 class="mb-2 font-medium">Language</h6>
                                <div class="flex items-center mb-4">
                                    <input
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-blue-500"
                                        id="javascript-checkbox-drawer" type="checkbox" value="">
                                    <label class="text-sm font-medium text-gray-900 ms-2"
                                        for="javascript-checkbox-drawer">Javascript</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-blue-500"
                                        id="php-checkbox-drawer" type="checkbox" value="">
                                    <label class="text-sm font-medium text-gray-900 ms-2"
                                        for="php-checkbox-drawer">PHP</label>
                                </div>
                            </div>
                            <button
                                class="mb-2 mt-10 block w-full rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
                                type="submit">Search</button>
                        </form>
                    </div>
                </div>

                <div class="flex flex-col mt-5 mb-8">
                    <div class="flex justify-end">
                        <button
                            class="mb-2 me-2 rounded-lg bg-primary-600 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-700 focus:outline-none focus:ring-4 focus:ring-primary-300"
                            type="button">Add your project</button>
                    </div>
                    <div class="grid grid-cols-1 mx-auto gap-7 lg:grid-cols-2">

                        <div
                            class="flex flex-col justify-between max-w-lg bg-white border border-gray-200 rounded-lg shadow">
                            <div>
                                <a href="#">
                                    <img class="rounded-t-lg"
                                        src="{{ asset('assets/img/project/large-your-business.webp') }}" alt="" />
                                </a>
                                <div class="p-5">
                                    <div class="mb-2 flex gap-x-2.5">
                                        <span
                                            class="rounded bg-gray-800 px-2.5 py-0.5 text-xs font-medium text-white">PHP</span>
                                        <span
                                            class="rounded bg-gray-800 px-2.5 py-0.5 text-xs font-medium text-white">Laravel</span>
                                    </div>

                                    <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                                            technology acquisitions 2024</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology
                                        acquisitions of 2021 so far, in reverse chronological order. Lorem ipsum dolor sit
                                        amet.</p>
                                </div>
                            </div>

                            <div class="p-5">
                                <p>By <a class="font-semibold hover:underline" href="#">khmalz</a> | 21 Days ago</p>
                            </div>
                        </div>

                        <div
                            class="flex flex-col justify-between max-w-lg bg-white border border-gray-200 rounded-lg shadow">
                            <div>
                                <a href="#">
                                    <img class="rounded-t-lg"
                                        src="{{ asset('assets/img/project/project-management.png') }}" alt="" />
                                </a>
                                <div class="p-5">
                                    <div class="mb-2 flex gap-x-2.5">
                                        <span
                                            class="rounded bg-gray-800 px-2.5 py-0.5 text-xs font-medium text-white">PHP</span>
                                        <span
                                            class="rounded bg-gray-800 px-2.5 py-0.5 text-xs font-medium text-white">Laravel</span>
                                    </div>

                                    <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                                            technology acquisitions 2024</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology
                                        acquisitions of 2021 so far, in reverse chronological order. Lorem ipsum dolor sit
                                        amet
                                        consectetur adipisicing elit. Veniam, velit..</p>
                                </div>
                            </div>

                            <div class="p-5">
                                <p>By <a class="font-semibold hover:underline" href="#">khmalz</a> | 21 Days ago</p>
                            </div>
                        </div>

                        <div
                            class="flex flex-col justify-between max-w-lg bg-white border border-gray-200 rounded-lg shadow">
                            <div>
                                <a href="#">
                                    <img class="rounded-t-lg" src="{{ asset('assets/img/project/project-manager.png') }}"
                                        alt="" />
                                </a>
                                <div class="p-5">
                                    <div class="mb-2 flex gap-x-2.5">
                                        <span
                                            class="rounded bg-gray-800 px-2.5 py-0.5 text-xs font-medium text-white">PHP</span>
                                        <span
                                            class="rounded bg-gray-800 px-2.5 py-0.5 text-xs font-medium text-white">Laravel</span>
                                    </div>

                                    <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                                            technology acquisitions 2024</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology
                                        acquisitions of 2021 so far, in reverse chronological order. Lorem ipsum dolor sit
                                        amet
                                        consectetur adipisicing elit.</p>
                                </div>
                            </div>

                            <div class="p-5">
                                <p>By <a class="font-semibold hover:underline" href="#">khmalz</a> | 21 Days ago</p>
                            </div>
                        </div>

                        <div
                            class="flex flex-col justify-between max-w-lg bg-white border border-gray-200 rounded-lg shadow">
                            <div>
                                <a href="#">
                                    <img class="rounded-t-lg" src="{{ asset('assets/img/project/web-design.jpg') }}"
                                        alt="" />
                                </a>
                                <div class="p-5">
                                    <div class="mb-2 flex gap-x-2.5">
                                        <span
                                            class="rounded bg-gray-800 px-2.5 py-0.5 text-xs font-medium text-white">PHP</span>
                                        <span
                                            class="rounded bg-gray-800 px-2.5 py-0.5 text-xs font-medium text-white">Laravel</span>
                                    </div>

                                    <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                                            technology acquisitions 2024</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology
                                        acquisitions of 2021 so far, in reverse chronological order. Lorem ipsum dolor sit
                                        amet
                                        consectetur.
                                </div>
                            </div>

                            <div class="p-5">
                                <p>By <a class="font-semibold hover:underline" href="#">khmalz</a> | 21 Days ago</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function filterInput(el, drawer = false) {
            let inputPrefix = drawer ? 'Drawer' : '';
            let selectedOption = $(el).val();

            $(`#titleInput${inputPrefix}, #developerInput${inputPrefix}`).addClass('hidden');

            if (selectedOption === 'title' || selectedOption === 'developer') {
                $(`#${selectedOption}Input${inputPrefix}`).removeClass('hidden');
            }
        }
    </script>
@endpush
