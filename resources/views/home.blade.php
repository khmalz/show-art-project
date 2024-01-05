@extends('layouts.main')

@section('content')
    <header
        class="flex h-[520px] items-center justify-center bg-[url('{{ asset('assets/img/header-bg.jpg') }}')] bg-no-repeat">
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

        <div class="flex">
            <div class="mx-auto mt-10 grid grid-cols-1 gap-7 md:grid-cols-2 lg:grid-cols-3">

                <div class="flex max-w-md flex-col justify-between rounded-lg border border-gray-200 bg-white shadow">
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
                </div>

                <div class="flex max-w-md flex-col justify-between rounded-lg border border-gray-200 bg-white shadow">
                    <div>
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('assets/img/project/project-management.png') }}"
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
                                acquisitions of 2021 so far, in reverse chronological order. Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Veniam, velit..</p>
                        </div>
                    </div>

                    <div class="p-5">
                        <p>By <a class="font-semibold hover:underline" href="#">khmalz</a> | 21 Days ago</p>
                    </div>
                </div>

                <div class="flex max-w-md flex-col justify-between rounded-lg border border-gray-200 bg-white shadow">
                    <div>
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('assets/img/project/project-manager.png') }}"
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
                                acquisitions of 2021 so far, in reverse chronological order. Lorem ipsum dolor sit amet
                                consectetur adipisicing elit.</p>
                        </div>
                    </div>

                    <div class="p-5">
                        <p>By <a class="font-semibold hover:underline" href="#">khmalz</a> | 21 Days ago</p>
                    </div>
                </div>

                <div class="flex max-w-md flex-col justify-between rounded-lg border border-gray-200 bg-white shadow">
                    <div>
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('assets/img/project/web-design.jpg') }}"
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
                                acquisitions of 2021 so far, in reverse chronological order. Lorem ipsum dolor sit amet
                                consectetur.
                        </div>
                    </div>

                    <div class="p-5">
                        <p>By <a class="font-semibold hover:underline" href="#">khmalz</a> | 21 Days ago</p>
                    </div>
                </div>

            </div>
        </div>

        <div>
            <a class="mt-10 block text-center text-primary-800 hover:text-primary-900 hover:underline" href="#">Lihat
                Selengkapnya..</a>
        </div>
    </main>
@endsection
