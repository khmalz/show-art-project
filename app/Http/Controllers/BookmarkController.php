<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Project;
use Illuminate\Http\Request;
use Maize\Markable\Models\Bookmark;

class BookmarkController extends Controller
{
    public function index(Request $request)
    {
        $tags = Tag::all();

        $projects = Project::whereHasBookmark($request->user())->with('developer', 'images', 'tags', 'bookmarks')
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

        $title = 'List Project - Bookmark';

        return view('project.index', compact('projects', 'tags', 'title'));
    }

    public function bookmark(Request $request, Project $project)
    {
        if (Bookmark::has($project, $request->user())) {
            Bookmark::remove($project, $request->user());
        } else {
            Bookmark::add($project, $request->user());
        }

        return back();
    }
}
