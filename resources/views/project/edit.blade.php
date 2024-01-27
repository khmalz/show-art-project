@extends('layouts.main', ['grayBg' => true])

@section('content')
    <div class="container pt-8">

        <div class="mx-auto w-full max-w-5xl bg-white">
            <div class="p-5">
                <h3 class="mb-5 text-2xl font-semibold">Input Project</h3>
                <form action="{{ route('project.update', $project) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
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
                            id="title" name="title" type="text" value="{{ old('title', $project->title) }}"
                            placeholder="Title" required>
                        @error('title')
                            <p class="mt-2 text-sm font-semibold text-rose-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="mb-2 block text-sm font-medium text-gray-900" for="select-tag">
                            Tags</label>
                        <div class="relative flex w-full">
                            <select class="block w-full cursor-pointer rounded-sm focus:outline-none" id="select-tag"
                                name="tags[]"
                                data-tags="{{ implode(',', old('tags', $project->tags->pluck('id')->toArray())) }}" multiple
                                placeholder="Select tags..." autocomplete="off" multiple>
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
                        <textarea id="description" name="description" data-description="{{ old('description', $project->description) }}"
                            placeholder="Write your thoughts here..."></textarea>
                        @error('description')
                            <p class="mt-2 text-sm font-semibold text-rose-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 flex w-full flex-col justify-center">
                        <label class="mb-2 block text-sm font-medium text-gray-900" for="dropzone-file">Upload New
                            Photo</label>
                        <label
                            class="flex h-64 w-full cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-300 bg-gray-50 hover:bg-gray-100"
                            id="dropzone-label" for="dropzone-file">
                            <div class="flex flex-col items-center justify-center pb-6 pt-5">
                                <svg class="mb-4 h-8 w-8 text-gray-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500" id="file-name"><span class="font-semibold">Click to
                                        upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500">PNG, JPG, JPEG, or WEBP (MAX. 2 MB).</p>
                            </div>
                            <input class="hidden" id="dropzone-file" name="images[]" type="file" multiple
                                accept=".jpg, .jpeg, .png, .webp" />
                        </label>
                        @error('images')
                            <p class="mt-2 text-sm font-semibold text-rose-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div id="deleted-id-image-ori" hidden></div>
                    <div class="mb-3">
                        <div class="grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3" id="image-container">
                            @foreach ($project->images as $image)
                                <div class="relative" id="image-ori{{ $image->id }}">
                                    <button
                                        class="delete-button focus:ring-bg-gray-100/80 absolute -top-2 left-0 m-4 rounded-full bg-gray-200/80 px-2 text-white focus:border-blue-300 focus:outline-none"
                                        type="button" onclick="deleteImageOri(this, {{ $image->id }})">
                                        <i class="fas fa-times text-xl"></i>
                                    </button>
                                    <img class="h-56 w-full rounded-md border-2 border-primary-500 shadow-sm"
                                        data-name="${file.name}" src="{{ asset('assets/img/' . $image->path) }}"
                                        alt="image-ori{{ $image->id }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto"
                        type="submit">Update</button>
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

        function deleteImageOri(el, imageId) {
            // Temukan elemen terdekat dengan ID yang sesuai
            const confirmDelete = confirm(
                "Apakah Anda yakin ingin menghapus gambar ini? \nTidak bisa dikembalikan kembali");

            if (confirmDelete) {
                const imageDiv = $(el).closest(`#image-ori${imageId}`);

                if (imageDiv) {
                    imageDiv.remove();

                    const deletedImageInput = `
                        <input type="text" name="img_deleted[]" value="${imageId}">
                    `;

                    $("#deleted-id-image-ori").append(deletedImageInput);
                }
            }
        }

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
            document.getElementById('dropzone-file').files = dt.files;

            handleFileCount()
        }

        function handleFileCount() {
            const fileCount = dt.files.length;

            if (fileCount > 0) {
                const fileNameDisplay = fileCount === 1 ? dt.items[0].getAsFile().name : `${fileCount} files`;

                // Update file name display
                $('#file-name').text(fileNameDisplay);
            } else {
                $('#file-name').html(
                    `<span class="font-semibold">Click to upload</span> or drag and drop`
                );
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const dropzoneLabel = $('#dropzone-label');
            const dropzoneFileInput = $('#dropzone-file');
            const allowedExtensionsDesign = ["jpg", "jpeg", "png", "webp"];

            dropzoneLabel.on('dragover', function(e) {
                e.preventDefault();
                $(this).addClass('border-primary-500');
            });

            dropzoneLabel.on('dragleave', function() {
                $(this).removeClass('border-primary-500');
            });

            dropzoneLabel.on('drop', function(e) {
                e.preventDefault();
                $(this).removeClass('border-primary-500');

                const droppedFiles = e.originalEvent.dataTransfer.files;
                handleFiles(droppedFiles);
            });

            dropzoneFileInput.change(function() {
                const selectedFiles = this.files;
                handleFiles(selectedFiles);
            });

            function handleFiles(files) {
                const imageContainer = $("#image-container");

                for (let i = 0; i < files.length; i++) {
                    let duplicate = false;
                    const file = files[i];

                    for (let i = 0; i < dt.items.length; i++) {
                        if (file.name === dt.items[i].getAsFile().name) {
                            duplicate = true;
                            break;
                        } else {
                            duplicate = false
                        }
                    }

                    if (!duplicate) {
                        // Validate file extension
                        const fileExtension = file.name.split(".").pop().toLowerCase();
                        if (!allowedExtensionsDesign.includes(fileExtension)) {
                            const validationHtml =
                                `<p id="validationFile" class="mt-2 text-sm font-semibold text-rose-500">Hanya file dengan format yang diizinkan.</p>`
                            dropzoneLabel.next("#validationFile").remove().end().val("").after(validationHtml);
                        } else {
                            dropzoneLabel.next("#validationFile").remove();

                            dt.items.add(file);

                            // Preview image
                            const blob = URL.createObjectURL(file);
                            const imageHTML = `
                                <div class="relative" id="image-pre${i}">
                                    <button type="button" onclick="deleteImagePre(this, ${i})"
                                        class="absolute left-0 px-2 m-4 text-white rounded-full delete-button -top-2 bg-gray-100/80 focus:border-blue-300 focus:outline-none focus:ring-bg-gray-100/80">
                                        <i class="text-2xl fas fa-times"></i>
                                    </button>
                                    <img class="w-full h-56 border rounded-md shadow-sm"
                                        src="${blob}"
                                        data-name="${file.name}"
                                        alt="image-pre${i}">
                                </div>
                            `;
                            imageContainer.append(imageHTML);
                        }
                    } else {
                        alert('Tidak bisa upload image yang sama')
                    }
                }

                dropzoneFileInput[0].files = dt.files;
                handleFileCount()
            }

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
