<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RyanChandler\Comments\Models\Comment;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::role('siswa')->get();

        return view('admin.user.list', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['nullable', Rules\Password::defaults()],
        ]);

        if (!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        return to_route('admin.user.index')->with('success', 'Successfully edited a user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        Comment::where('parent_id', $user->id)->orWhere('user_id', $user->id)->forceDelete();

        $user->projects->each(function ($project) {
            if ($project->images->count() > 0) {
                $project->images->each(function ($image) {
                    Storage::delete($image->path);
                });
            }
        });

        $user->delete();

        return to_route('admin.user.index')->with('success', 'Success delete a user');
    }
}
