@extends('layouts.main', ['grayBg' => true])

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet" />
@endpush

@section('content')
    <div class="container pt-8">

        <div class="mx-auto w-full max-w-5xl bg-white">
            <div class="p-5">
                <h3 class="mb-5 text-2xl font-semibold">Input Project</h3>
                <form action="{{ route('project.store') }}" method="POST">
                    @csrf
                    <div class="mb-3 grid gap-4 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900" for="name">
                                Name</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                id="name" type="text" placeholder="John" disabled>
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900" for="email">Email
                                address</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                id="email" type="email" placeholder="john.doe@company.com" disabled>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="mb-2 block text-sm font-medium text-gray-900" for="title">
                            Title</label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            id="title" name="title" type="text" placeholder="Title" required>
                    </div>
                    <div class="mb-3">
                        <label class="mb-2 block text-sm font-medium text-gray-900" for="Multiselect">
                            Tags</label>
                        <div class="relative flex w-full">
                            <select class="block w-full cursor-pointer rounded-sm focus:outline-none" id="select-tag"
                                name="tags[]" multiple placeholder="Select tags..." autocomplete="off" multiple>
                                <option value="javascript">Javascript</option>
                                <option value="php">PHP</option>
                                <option value="laravel">Laravel</option>
                                <option value="react">React</option>
                                <option value="typescript">Typescript</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="mb-2 block text-sm font-medium text-gray-900" for="description">Your
                            Description</label>
                        <textarea id="description" name="description" placeholder="Write your thoughts here..."></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="mb-2 block text-sm font-medium text-gray-900" for="multipleFiles">Upload Photo</label>
                        <input
                            class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 file:!bg-blue-600 file:text-blue-600 focus:outline-none"
                            id="multipleFiles" name="images[]" type="file" onchange="previewImageMultiple()" multiple>

                        <p class="mt-1 text-sm text-gray-500" id="file_input_help">SVG, PNG, JPG or GIF
                            (MAX. 2 MB).</p>
                    </div>
                    <div class="mb-3">
                        <div class="grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3" id="image-container">
                        </div>
                    </div>
                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto"
                        type="submit">Create</button>
                </form>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    <script>
        new TomSelect('#select-tag');
    </script>

    <script src="https://cdn.tiny.cloud/1/{{ config('app.tiny_api_key') }}/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#description',
            plugins: 'wordcount',
        });

        const dt = new DataTransfer();

        function deleteImagePre(el, imageId) {
            // Temukan elemen preview terdekat dengan ID yang sesuai
            const imageDiv = $(el).closest(`#image-pre${imageId}`);

            if (imageDiv) {
                imageDiv.remove();
            }

            let name = imageDiv.find('img').data('name');
            for (let i = 0; i < dt.items.length; i++) {
                if (name === dt.items[i].getAsFile().name) {
                    dt.items.remove(i);
                }
            }
            document.getElementById('multipleFiles').files = dt.files;
        }

        function previewImageMultiple() {
            const imageInput = document.querySelector("#multipleFiles");
            const imageContainer = $("#image-container");

            const files = imageInput.files;

            for (let i = 0; i < files.length; i++) {
                let duplicate = false;
                const file = files[i];

                if (file) {

                    for (let i = 0; i < dt.items.length; i++) {
                        if (file.name === dt.items[i].getAsFile().name) {
                            duplicate = true;
                            break; // Keluar dari loop ketika ada file duplikat
                        } else {
                            duplicate = false
                        }
                    }

                    if (!duplicate) {
                        dt.items.add(file);

                        const blob = URL.createObjectURL(file);

                        // Buat elemen gambar dengan template literal dan jQuery
                        const imageHTML = `
                            <div class="relative" id="image-pre${i}">
                                <button type="button"  onclick="deleteImagePre(this, ${i})"
                                    class="absolute left-0 px-2 m-4 text-white rounded-full delete-button -top-2 bg-gray-100/80 focus:border-blue-300 focus:outline-none focus:ring-bg-gray-100/80">
                                    <i class="text-2xl fas fa-times"></i>
                                </button>
                                <img class="w-full h-56 border rounded-md shadow-sm"
                                src="${blob}"
                                data-name="${file.name}"
                                alt="image-pre${i}">
                            </div>
                        `;

                        // Tambahkan elemen gambar ke dalam container menggunakan jQuery
                        imageContainer.append(imageHTML);
                    } else {
                        alert('Tidak bisa upload image yang sama')
                    }
                }
            }

            imageInput.files = dt.files;
        }
    </script>
@endpush
