@extends('layouts.main')

@section('content')
    <div class="container mt-3">
        <div class="flex space-x-10">
            <div class="hidden w-1/5 lg:block">
                <div class="h-full w-full border-r-2 border-gray-200/75 p-3 shadow-sm">
                    <div class="flex items-center justify-between">
                        <p>Filter By: </p>
                        <a class="text-sm text-primary-700" href="{{ route('project.index') }}">Reset all filters</a>
                    </div>
                    <div>
                        <div class="mb-4 mt-3">
                            <label for="title" class="mb-2 block text-sm font-medium text-gray-900">Title</label>
                            <input type="text" id="title"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 selection:bg-primary-500 selection:text-white focus:border-primary-500 focus:ring-primary-500"
                                placeholder="Title" required>
                        </div>
                        <div class="mt-5">
                            <h6 class="mb-2 font-medium">Framework</h6>
                            <div class="mb-4 flex items-center">
                                <input id="laravel-checkbox" type="checkbox" value=""
                                    class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500">
                                <label for="laravel-checkbox"
                                    class="ms-2 text-sm font-medium text-gray-900 selection:bg-primary-500 selection:text-white">Laravel</label>
                            </div>
                            <div class="mb-4 flex items-center">
                                <input id="react-checkbox" type="checkbox" value=""
                                    class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500">
                                <label for="react-checkbox"
                                    class="ms-2 text-sm font-medium text-gray-900 selection:bg-primary-500 selection:text-white">React</label>
                            </div>
                        </div>
                        <div class="mt-5">
                            <h6 class="mb-2 font-medium">Language</h6>
                            <div class="mb-4 flex items-center">
                                <input id="javascript-checkbox" type="checkbox" value=""
                                    class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500">
                                <label for="javascript-checkbox"
                                    class="ms-2 text-sm font-medium text-gray-900 selection:bg-primary-500 selection:text-white">Javascript</label>
                            </div>
                            <div class="mb-4 flex items-center">
                                <input id="php-checkbox" type="checkbox" value=""
                                    class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500">
                                <label for="php-checkbox"
                                    class="ms-2 text-sm font-medium text-gray-900 selection:bg-primary-500 selection:text-white">PHP</label>
                            </div>
                        </div>
                        <div class="mt-5">
                            <button
                                class="rounded-md bg-primary-700 px-4 py-2 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">Search</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-4/5">
                <div class="flex lg:hidden">
                    <div class="mx-auto mt-5">
                        <button type="button" data-drawer-target="drawer-contact" data-drawer-show="drawer-contact"
                            aria-controls="drawer-contact"
                            class="rounded-md bg-indigo-600 px-4 py-2 text-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-4 focus:ring-blue-300">Filter</button>
                    </div>
                    <div id="drawer-contact"
                        class="fixed left-0 top-0 z-40 h-screen w-1/2 -translate-x-full overflow-y-auto bg-white p-4 transition-transform"
                        tabindex="-1" aria-labelledby="drawer-contact-label">
                        <h5 id="drawer-label"
                            class="mb-6 inline-flex items-center text-base font-semibold uppercase text-gray-500">
                            Filter
                        </h5>
                        <button type="button" data-drawer-hide="drawer-contact" aria-controls="drawer-contact"
                            class="absolute end-2.5 top-2.5 inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900">
                            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close menu</span>
                        </button>
                        <form class="mb-6">
                            <a class="text-blue-700 hover:text-blue-800" href="{{ route('project.index') }}">Reset all
                                filters</a>
                            <div class="mt-5">
                                <div class="mb-4">
                                    <label for="title" class="mb-2 block text-sm font-medium text-gray-900">Title</label>
                                    <input type="text" id="title"
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                        placeholder="Title" required>
                                </div>
                                <h6 class="mb-2 font-medium">Framework</h6>
                                <div class="mb-4 flex items-center">
                                    <input id="laravel-checkbox-drawer" type="checkbox" value=""
                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500">
                                    <label for="laravel-checkbox-drawer"
                                        class="ms-2 text-sm font-medium text-gray-900">Laravel</label>
                                </div>
                                <div class="mb-4 flex items-center">
                                    <input id="react-checkbox-drawer" type="checkbox" value=""
                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500">
                                    <label for="react-checkbox-drawer"
                                        class="ms-2 text-sm font-medium text-gray-900">React</label>
                                </div>
                            </div>
                            <div class="mt-5">
                                <h6 class="mb-2 font-medium">Language</h6>
                                <div class="mb-4 flex items-center">
                                    <input id="javascript-checkbox-drawer" type="checkbox" value=""
                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500">
                                    <label for="javascript-checkbox-drawer"
                                        class="ms-2 text-sm font-medium text-gray-900">Javascript</label>
                                </div>
                                <div class="mb-4 flex items-center">
                                    <input id="php-checkbox-drawer" type="checkbox" value=""
                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500">
                                    <label for="php-checkbox-drawer"
                                        class="ms-2 text-sm font-medium text-gray-900">PHP</label>
                                </div>
                            </div>
                            <button type="submit"
                                class="mb-2 mt-10 block w-full rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Search</button>
                        </form>
                    </div>
                </div>

                <div class="mb-8 flex">
                    <div class="mx-auto mt-10 grid grid-cols-1 gap-7 lg:grid-cols-2">

                        <div
                            class="flex max-w-lg flex-col justify-between rounded-lg border border-gray-200 bg-white shadow">
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
                            class="flex max-w-lg flex-col justify-between rounded-lg border border-gray-200 bg-white shadow">
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
                            class="flex max-w-lg flex-col justify-between rounded-lg border border-gray-200 bg-white shadow">
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
                            class="flex max-w-lg flex-col justify-between rounded-lg border border-gray-200 bg-white shadow">
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
