<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RegisterActive;
use Illuminate\Http\Request;

class RegisterToggleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $registerActive = RegisterActive::first()->active;

        return view('admin.register-toggle', compact('registerActive'));
    }
}
