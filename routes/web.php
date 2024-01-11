<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectListController;
use App\Http\Controllers\Admin\RegisterToggleController;
use App\Http\Controllers\Admin\RegisterToggleSystemController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SiswaListProjectController;
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

Route::middleware(['auth', 'role:siswa'])->group(function () {
    Route::get('/my-project', SiswaListProjectController::class)->name('my-project');

    Route::resource('project', ProjectController::class)->except('index', 'show');
});

Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/project/{project}', [ProjectController::class, 'show'])->name('project.show');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::name('admin.')->group(function () {
        Route::get('/list/project', ProjectListController::class)->name('project.list');

        Route::resource('user', UserController::class)->except('create', 'store', 'show');

        Route::get('/register-toogle', RegisterToggleController::class)->name('register-toggle');
        Route::patch('/register-toogle', RegisterToggleSystemController::class)->name('register-toggle.update');
    });
});

require __DIR__ . '/auth.php';
