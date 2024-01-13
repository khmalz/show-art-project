<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use RyanChandler\Comments\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, Project $project)
    {
        $request->validate([
            'content' => ['required']
        ]);

        $project->comment($request->content, user: $request->user());

        return to_route('project.show', $project);
    }

    public function reply(Request $request, Project $project, Comment $comment)
    {
        $request->validate([
            'content_reply' => ['required']
        ]);

        $project->comment($request->content_reply, parent: $comment);

        return to_route('project.show', $project);
    }

    public function destroy(Project $project, Comment $comment)
    {
        $comment->delete();

        return to_route('project.show', $project);
    }
}
