<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RegisterActive;
use Illuminate\Http\Request;

class RegisterToggleSystemController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $regisActive = RegisterActive::first();

        if ($request->has('toggle')) {
            $regisActive->update(['active' => true]);
        } else {
            $regisActive->update(['active' => false]);
        }

        return to_route('admin.register-toggle')->with('success', 'Register Has Been Toggled');
    }
}
