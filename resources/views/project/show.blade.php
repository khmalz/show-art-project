@extends('layouts.main', ['grayBg' => true])

@section('content')
    <div class="container pt-5">
        <div class="grid w-full grid-cols-1 gap-x-10 gap-y-3 lg:grid-cols-5">
            <div class="lg:col-span-3">
                <div id="controls-carousel" class="mt-5 grid w-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-80 overflow-hidden rounded-lg lg:h-[400px]">
                        <a href="{{ asset('assets/img/project/large-your-business.webp') }}"
                            class="project-lightbox hidden p-1 duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('assets/img/project/large-your-business.webp') }}"
                                class="h-72 w-full object-cover lg:h-96" alt="image 1">
                        </a>
                        <!-- Item 2 -->
                        <a href="{{ asset('assets/img/project/project-management.png') }}"
                            class="project-lightbox hidden p-1 duration-700 ease-in-out" data-carousel-item="active">
                            <img src="{{ asset('assets/img/project/project-management.png') }}"
                                class="h-72 w-full object-cover lg:h-96" alt="image 2">
                        </a>
                        <!-- Item 3 -->
                        <a href="{{ asset('assets/img/project/project-manager.png') }}"
                            class="project-lightbox hidden p-1 duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('assets/img/project/project-manager.png') }}"
                                class="h-72 w-full object-cover lg:h-96" full alt="image 3">
                        </a>
                        <!-- Item 4 -->
                        <a href="{{ asset('assets/img/project/web-design.jpg') }}"
                            class="project-lightbox hidden p-1 duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('assets/img/project/web-design.jpg') }}"
                                class="h-72 w-full object-cover lg:h-96" alt="image 4">
                        </a>
                    </div>

                    <!-- Slider controls -->
                    <div class="flex space-x-2 p-1">
                        <button type="button"
                            class="group flex h-full cursor-pointer items-center justify-center focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex h-10 w-10 items-center justify-center bg-black/20 group-hover:bg-black/10 group-focus:outline-none group-focus:ring-black">
                                <svg class="h-4 w-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="group flex h-full cursor-pointer items-center justify-center focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex h-10 w-10 items-center justify-center bg-black/20 group-hover:bg-black/10 group-focus:outline-none group-focus:ring-black">
                                <svg class="h-4 w-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full border bg-white p-5 shadow-sm lg:col-span-2">
                <h6 class="mb-8 text-sm font-semibold">Khmalz</h6>
                <h3 class="mb-1 text-xl">Noteworthy technology acquisitions 2024</h3>
                <div class="mb-6 flex gap-x-2.5">
                    <span class="rounded bg-gray-800 px-2.5 py-0.5 text-xs font-medium text-white">PHP</span>
                    <span class="rounded bg-gray-800 px-2.5 py-0.5 text-xs font-medium text-white">Laravel</span>
                </div>
                <p class="mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, consequatur repudiandae.
                    Fugit, repudiandae. Sapiente aut voluptatibus, perspiciatis tempora, eos libero molestias beatae
                    expedita dolore ad illum non. Nam cumque officia obcaecati quia, unde repellat praesentium qui
                    cupiditate est commodi omnis et nobis delectus quasi at id placeat quisquam ut reiciendis? Dolorem,
                    facere. Obcaecati sapiente fugit aperiam cum ipsam, eaque laudantium. Corporis blanditiis excepturi quia
                    optio ullam. Vero eveniet nihil cumque?</p>
                <p class="mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor sunt quasi, deleniti iusto
                    incidunt
                    quidem. Earum hic cupiditate qui eius, dignissimos obcaecati modi perspiciatis iusto similique dolorum
                    voluptas adipisci consequatur, aut labore corrupti eligendi in! Eveniet quisquam illum ipsum hic
                    dolores. Laborum neque, voluptate hic obcaecati vitae fuga id quod expedita voluptatibus voluptas
                    perspiciatis sed illo, reiciendis alias. Eum.</p>
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
