<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = User::role('admin')->first();

        return view('admin.user.admin', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'password' => ['nullable', Rules\Password::defaults()],
        ]);

        $data['password'] = bcrypt($data['password']);

        $user->update($data);

        return to_route('admin.account.index')->with('success', 'Successfully edited password admin');
    }
}
