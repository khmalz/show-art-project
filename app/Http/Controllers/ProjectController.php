<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tags = Tag::all();

        $projects = Project::with('developer', 'images', 'tags')
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
            'tags' => ['required', 'array', 'min:1'],
            'tags.*' => ['string'],
            'description' => ['required', 'string'],
            'images' => ['required', 'array', 'min:1'],
            'images.*' => ['file', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'],
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
            $imagePath = $image->store('images');

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
        $project->load('developer', 'images', 'tags');

        return view("project.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
