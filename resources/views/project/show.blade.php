@extends('layouts.main', ['grayBg' => true])

@section('content')
    <div class="container pt-5">
        <div class="grid w-full grid-cols-1 gap-x-10 gap-y-3 lg:grid-cols-5">
            <div class="lg:col-span-3">
                @if (count($project->images) > 0 && count($project->images) < 2)
                    <a class="project-lightbox"
                        href="{{ \Illuminate\Support\Facades\Storage::url($project->images[0]->path) }}">
                        <img class="h-72 w-full object-cover lg:h-96"
                            src="{{ \Illuminate\Support\Facades\Storage::url($project->images[0]->path) }}" alt="image 1">
                    </a>
                @else
                    <div class="relative w-full" id="controls-carousel" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-80 overflow-hidden rounded-lg lg:h-[400px]">
                            @foreach ($imageChunk as $chunk)
                                @foreach ($chunk as $image)
                                    <a class="project-lightbox hidden duration-700 ease-in-out" data-carousel-item
                                        href="{{ $image->path }}">
                                        <img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                                            src="{{ \Illuminate\Support\Facades\Storage::url($image->path) }}"
                                            alt="...">
                                    </a>
                                @endforeach
                            @endforeach

                        </div>
                        <!-- Slider controls -->
                        <div class="flex space-x-2 p-1">
                            <button class="group flex h-full cursor-pointer items-center justify-center focus:outline-none"
                                data-carousel-prev type="button">
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
                            <button class="group flex h-full cursor-pointer items-center justify-center focus:outline-none"
                                data-carousel-next type="button">
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
                @endif
            </div>
            <div class="w-full border bg-white p-5 shadow-sm lg:col-span-2">
                <div class="mb-8 flex items-center justify-between">
                    <h6 class="text-sm font-semibold">{{ $project->developer->name }}</h6>

                    @if ($project->user_id === auth()->id())
                        <a class="rounded-lg bg-primary-700 px-4 py-1.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-primary-300"
                            href="{{ route('project.edit', $project) }}">Edit</a>
                    @endif
                </div>
                <h3 class="mb-1 text-xl">{{ $project->title }}</h3>
                <div class="mb-6 flex gap-x-2.5">
                    @foreach ($project->tags as $tag)
                        <span
                            class="rounded bg-gray-800 px-2.5 py-0.5 text-xs font-medium text-white">{{ $tag->name }}</span>
                    @endforeach
                </div>
                {!! $project->description !!}
            </div>
        </div>
        <div class="my-5 w-full border bg-white p-5 shadow-sm">

            <div class="mb-4 w-full rounded-lg border-2 border-gray-200 bg-gray-50">
                <form action="{{ route('comment.store', $project) }}" method="POST">
                    @csrf
                    <div class="rounded-t-lg bg-white px-4 py-2">
                        <label class="sr-only" for="comment">Your comment</label>
                        <textarea class="w-full border-0 bg-white px-0 text-sm text-gray-900 focus:ring-0" id="comment" name="content"
                            rows="2" placeholder="Write a comment..."></textarea>
                        @error('content')
                            <p class="text-sm font-semibold text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="border-t px-3 py-2">
                        <button
                            class="inline-flex items-center rounded-lg bg-primary-700 px-4 py-2.5 text-center text-xs font-medium text-white hover:bg-primary-800 focus:ring-4 focus:ring-primary-200"
                            type="submit">
                            Comment
                        </button>
                    </div>
                </form>
            </div>

            @foreach ($project->comments as $comment)
                <div class="mb-2 rounded border-2 bg-white shadow-md">
                    <div class="p-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <h6 class="font-bold">{{ $comment->user->name }}</h6>
                                <small>{{ $comment->created_at->diffForHumans() }}</small>
                            </div>
                            @if ($comment->user->id == auth()->id())
                                <div>
                                    <form action="{{ route('comment.destroy', [$project, $comment]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a class="mb-2 me-2 cursor-pointer rounded-lg bg-red-700 px-2 py-1 text-xs font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300"
                                            onclick="return confirm('Are you sure you want to delete?') ? this.parentElement.submit() : null">Delete
                                            Comment</a>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="p-3">
                        <small>
                            <p class="text-sm">
                                {{ $comment->content }}
                            </p>
                        </small>
                        <button class="mt-2 rounded bg-gray-200 px-2 py-1 text-sm text-gray-700"
                            id="replyButton{{ $comment->id }}" onclick="showReply({{ $comment->id }})">Reply</button>

                        <div class="reply-form{{ $comment->id }}" style="display: none">
                            <form action="{{ route('comment.reply', [$project, $comment]) }}" method="POST">
                                @csrf
                                <div class="mt-3">
                                    <div class="form-group">
                                        <textarea
                                            class="w-full border border-primary-500 bg-white text-sm text-gray-900 focus:border-primary-600 focus:outline-none focus:ring-0"
                                            id="reply" name="content_reply" rows="2" placeholder="Write a reply..."></textarea>
                                        @error('content_reply')
                                            <div class="mt-1 text-xs text-red-500">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button
                                        class="inline-flex items-center rounded bg-primary-700 px-2 py-1.5 text-center text-xs font-medium text-white hover:bg-primary-800 focus:ring-2 focus:ring-primary-200"
                                        type="submit">
                                        Reply
                                    </button>
                                    <button
                                        class="inline-flex items-center rounded bg-red-700 px-2 py-1.5 text-center text-xs font-medium text-white hover:bg-red-800 focus:ring-2 focus:ring-red-200"
                                        id="cancelButton{{ $comment->id }}" type="button"
                                        onclick="cancelReply({{ $comment->id }})">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>

                        @if (!empty($comment->children))
                            <div class="comment-content p-3">
                                @foreach ($comment->children as $child)
                                    <div class="mb-2 rounded border-2 bg-white shadow-md">
                                        <div class="p-3">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center space-x-2">
                                                    <h6 class="font-bold">{{ $comment->user->name }}</h6>
                                                    <small>{{ $comment->created_at->diffForHumans() }}</small>
                                                </div>
                                                @if ($child->user->id == auth()->id())
                                                    <div>
                                                        <form action="{{ route('comment.destroy', [$project, $child]) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a class="mb-2 me-2 cursor-pointer rounded-lg bg-red-700 px-2 py-1 text-xs font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300"
                                                                onclick="return confirm('Are you sure you want to delete?') ? this.parentElement.submit() : null">Delete
                                                                Reply</a>
                                                        </form>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <small>
                                                <p class="text-sm">
                                                    {{ $child->content }}
                                                </p>
                                            </small>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    @endsection

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const portfolioLightbox = GLightbox({
                    selector: '.project-lightbox'
                });
            });

            function showReply(id) {
                $(`.reply-form${id}`).show();
            }

            function cancelReply(id) {
                $(`.reply-form${id}`).hide();
            }
        </script>
    @endpush
