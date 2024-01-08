@extends('layouts.main', ['grayBg' => true])

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet" />
@endpush

@section('content')
    <div class="container pt-8">

        <div class="mx-auto w-full max-w-5xl bg-white">
            <div class="p-5">
                <h3 class="mb-5 text-2xl font-semibold">Create Project</h3>
                <form action="{{ route('project.store') }}" method="POST">
                    @csrf
                    <div class="mb-3 grid gap-4 md:grid-cols-2">
                        <div>
                            <label for="name" class="mb-2 block text-sm font-medium text-gray-900">
                                Name</label>
                            <input type="text" id="name"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                placeholder="John" disabled>
                        </div>
                        <div>
                            <label for="email" class="mb-2 block text-sm font-medium text-gray-900">Email
                                address</label>
                            <input type="email" id="email"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                placeholder="john.doe@company.com" disabled>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="mb-2 block text-sm font-medium text-gray-900">
                            Title</label>
                        <input type="text" id="title" name="title"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="Title" required>
                    </div>
                    <div class="mb-3">
                        <label for="Multiselect" class="mb-2 block text-sm font-medium text-gray-900">
                            Tags</label>
                        <div class="relative flex w-full">
                            <select id="select-tag" name="tags[]" multiple placeholder="Select tags..." autocomplete="off"
                                class="block w-full cursor-pointer rounded-sm focus:outline-none" multiple>
                                <option value="javascript">Javascript</option>
                                <option value="php">PHP</option>
                                <option value="laravel">Laravel</option>
                                <option value="react">React</option>
                                <option value="typescript">Typescript</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="mb-2 block text-sm font-medium text-gray-900">Your
                            Description</label>
                        <textarea id="description" name="description" placeholder="Write your thoughts here..."></textarea>
                    </div>
                    <button type="submit"
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto">Create</button>
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
    </script>
@endpush
