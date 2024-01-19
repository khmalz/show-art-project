@extends('layouts.main', ['grayBg' => true])

@section('content')
    <div class="container pt-8">

        <div class="mx-auto w-full max-w-5xl bg-white">
            <div class="p-5">
                <h3 class="mb-5 text-2xl font-semibold">Input Project</h3>
                <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 grid gap-4 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900" for="name">
                                Name</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                id="name" type="text" value="{{ auth()->user()->name }}" autocomplete="name"
                                placeholder="John" disabled>
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900" for="email">Email
                                address</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                id="email" type="email" value="{{ auth()->user()->email }}" autocomplete="email"
                                placeholder="john.doe@company.com" disabled>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="mb-2 block text-sm font-medium text-gray-900" for="title">
                            Title</label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            id="title" name="title" type="text" value="{{ old('title') }}" placeholder="Title"
                            required>
                        @error('title')
                            <p class="mt-2 text-sm font-semibold text-rose-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="mb-2 block text-sm font-medium text-gray-900" for="select-tag">
                            Tags</label>
                        <div class="relative flex w-full flex-col">
                            <select class="block w-full cursor-pointer rounded-sm focus:outline-none" id="select-tag"
                                name="tags[]" data-tags="{{ !empty(old('tags')) ? implode(',', old('tags')) : null }}"
                                multiple placeholder="Select tags..." autocomplete="off" multiple>
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                            @error('tags')
                                <p class="mt-2 text-sm font-semibold text-rose-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="mb-2 block text-sm font-medium text-gray-900" for="description">Your
                            Description</label>
                        <textarea id="description" name="description" data-description="{{ old('description') }}"
                            placeholder="Write your thoughts here..."></textarea>
                        @error('description')
                            <p class="mt-2 text-sm font-semibold text-rose-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="mb-2 block text-sm font-medium text-gray-900" for="multipleFiles">Upload Photo</label>
                        <input
                            class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 file:!bg-blue-600 file:text-blue-600 focus:outline-none"
                            id="multipleFiles" name="images[]" type="file" accept=".jpg, .jpeg, .png, .webp"
                            onchange="previewImageMultiple()" multiple>

                        <p class="mt-1 text-sm text-gray-500" id="file_input_help">PNG, JPG, JPEG, or WEBP
                            (MAX. 2 MB).</p>
                        @error('images')
                            <p class="mt-2 text-sm font-semibold text-rose-500">{{ $message }}</p>
                        @enderror
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
    <script src="https://cdn.tiny.cloud/1/{{ config('app.tiny_api_key') }}/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        const dt = new DataTransfer();

        const allowedExtensionsDesign = ["jpg", "jpeg", "png", "webp"];

        const validateFile = (input, allowedExtensions) => {
            const [file] = input.files;

            if (file) {
                const {
                    name
                } = file;
                const fileExtension = name.split(".").pop().toLowerCase();

                if (!allowedExtensions.includes(fileExtension)) {
                    const validationHtml =
                        `<p id="validationFile" class="mt-2 text-sm font-semibold text-rose-500" id="file-format-error">Hanya file dengan format yang diizinkan.</p>`

                    $(input).next("#validationFile").remove().end().val("").after(validationHtml);
                } else {
                    $(input).next("#validationFile").remove();
                }
            }
        };

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

            validateFile(imageInput, allowedExtensionsDesign);

            const files = imageInput.files;

            for (let i = 0; i < files.length; i++) {
                let duplicate = false;
                const file = files[i];

                if (file) {

                    for (let i = 0; i < dt.items.length; i++) {
                        if (file.name === dt.items[i].getAsFile().name) {
                            duplicate = true;
                            break;
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

        document.addEventListener('DOMContentLoaded', function() {
            let selectTom = new TomSelect('#select-tag', {
                sortField: {
                    field: "text",
                    direction: "asc"
                },
                maxItems: 7
            });

            let descriptionContent = $("#description").data('description')

            tinymce.init({
                selector: "#description",
                plugins: 'wordcount',
                setup: function(editor) {
                    editor.on('init', function(e) {
                        editor.setContent(descriptionContent);
                    });
                }
            });

            const tags = $("#select-tag").data('tags');

            if (tags) {
                let tagsArray;

                if (typeof tags === 'string') {
                    tagsArray = tags.split(',').map(tag => parseInt(tag));
                } else {
                    tagsArray = [parseInt(tags)];
                }

                selectTom.setValue(tagsArray)
            }
        })
    </script>
@endpush
