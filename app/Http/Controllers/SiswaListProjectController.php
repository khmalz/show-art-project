<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Project;
use Illuminate\Http\Request;

class SiswaListProjectController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $tags = Tag::all();

        $projects = Project::where('user_id', $request->user()->id)->with('developer', 'images', 'tags')
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
}
