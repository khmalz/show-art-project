<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/project', function () {
    return view('project.index');
})->name('project.index');

Route::get('/project/detail', function () {
    return view('project.show');
})->name('project.show');

Route::get('/project/create', function () {
    return view('project.create');
})->name('project.create');

Route::post('/project', function (\Illuminate\Http\Request $request) {
    return $request;
})->name('project.store');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::get('/list/project', function () {
        return view('admin.project.list');
    })->name('admin.project.list');

    Route::get('/list/user', function () {
        return view('admin.user.list');
    })->name('admin.user.list');
});

require __DIR__ . '/auth.php';
