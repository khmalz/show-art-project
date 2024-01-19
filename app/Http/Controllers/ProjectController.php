<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Tag;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tags = Tag::all();

        $projects = Project::with('developer', 'images', 'tags', 'bookmarks')
            ->when(request('searchBy') == 'title', function ($query) {
                $query->where('title', 'like', '%' . request('title') . '%');
            })
            ->when(request('searchBy') == 'developer', function ($query) {
                $query->whereHas('developer', function ($subQuery) {
                    $subQuery->where('name', 'like', '%' . request('developer') . '%');
                });
            })
            ->when(request('tags'), function ($query) {
                $query->whereHas('tags', function ($subQuery) {
                    $subQuery->whereIn('tags.id', request('tags'));
                });
            })
            ->get();

        return view("project.index", compact("projects", "tags"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();

        return view("project.create", compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'tags' => ['required', 'array', 'min:1', 'max:7'],
            'tags.*' => ['string'],
            'description' => ['required', 'string'],
            'images' => ['required', 'array', 'min:1'],
            'images.*' => ['file', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
        ]);

        $user = $request->user();

        $project = $user->projects()->create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        $tags = collect($request->tags);
        $project->tags()->attach($tags);

        $images = $request->file('images');
        foreach ($images as $image) {
            $imagePath = $image->store('projects');

            $project->images()->create([
                'path' => $imagePath,
            ]);
        }

        return to_route("project.index")->with('success', 'Success input your project');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $project->load([
            'developer', 'images', 'tags', 'comments' => function ($query) {
                $query->whereNull('parent_id');
            },
            'comments.user',
        ]);

        $imageChunk = $project->images->chunk(3);

        return view("project.show", compact("project", "imageChunk"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $project->load('developer', 'images', 'tags');

        abort_if($project->user_id !== auth()->user()->id, 403, 'Not Your Project');

        $tags = Tag::all();

        return view("project.edit", compact("project", 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => ['required', 'string'],
            'tags' => ['required', 'array', 'min:1', 'max:7'],
            'tags.*' => ['string'],
            'description' => ['required', 'string'],
            'images' => ['nullable', 'array'],
            'images.*' => ['file', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'],
        ]);

        DB::beginTransaction();

        try {
            $project->update($data);

            $deleted = $request->img_deleted;

            if ($deleted) {
                $imagesToDelete = Image::whereIn('id', $deleted)->get();

                $imagesToDelete->each->delete();
            }

            if (!$request->hasFile('images') && $project->images->isEmpty()) {
                return back()->withErrors(['images' => 'At least one image must be uploaded or kept.'])->withInput();
            }

            if ($request->hasFile('images')) {
                $images = $request->file('images');

                foreach ($images as $image) {
                    $imagePath = $image->store('projects');

                    $project->images()->create([
                        'path' => $imagePath,
                    ]);
                }
            }

            if ($deleted) {
                $imagesToDelete->each(function ($image) {
                    Storage::delete($image->path);
                });
            }

            $project->tags()->sync($request->tags);

            DB::commit();

            return to_route('my-project', $project)->with('success', 'Successfully updated your project');
        } catch (\Exception $e) {
            // Rollback database transaksi jika terjadi error
            DB::rollback();

            return back()->with('error', 'Failed to save changes: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        abort_if($project->user_id !== auth()->user()->id, 403, 'Not Your Project');

        if ($project->images->isNotEmpty()) {
            foreach ($project->images as $image) {
                Storage::delete($image->path);
            }
        }

        $project->comments()->forceDelete();
        $project->delete();

        return to_route('my-project')->with("success", "Success delete your project");
    }
}
