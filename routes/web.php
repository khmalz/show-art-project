<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\SiswaListProjectController;
use App\Http\Controllers\Admin\ProjectListController;
use App\Http\Controllers\Admin\ProjectShowController;
use App\Http\Controllers\Admin\RegisterToggleController;
use App\Http\Controllers\Admin\RegisterToggleSystemController;

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

Route::get('/', HomeController::class)->name('home');

Route::middleware('auth')->group(function () {
    Route::middleware('role:siswa')->group(function () {
        Route::get('/my-project', SiswaListProjectController::class)->name('my-project');

        Route::resource('project', ProjectController::class)->except('index', 'show');
        Route::get('/project/bookmark', [BookmarkController::class, 'index'])->name('project.bookmark.index');
        Route::patch('/project/{project}/bookmark', [BookmarkController::class, 'bookmark'])->name('project.bookmark');
    });

    Route::middleware('role:admin')->group(function () {
        Route::get('/dashboard', DashboardController::class)->name('dashboard');

        Route::name('admin.')->group(function () {
            Route::get('/list/project', ProjectListController::class)->name('project.list');
            Route::get('/list/project/{project}', ProjectShowController::class)->name('project.show');

            Route::resource('user', UserController::class)->except('create', 'store', 'show');
            Route::resource('tag', TagController::class)->except('show');

            Route::get('/register-toogle', RegisterToggleController::class)->name('register-toggle');
            Route::patch('/register-toogle', RegisterToggleSystemController::class)->name('register-toggle.update');
        });
    });

    Route::post('/project/{project}/comments', [CommentController::class, 'store'])->name('comment.store');
    Route::post('/project/{project}/comments/{comment}', [CommentController::class, 'reply'])->name('comment.reply');
    Route::delete('/project/{project}/{comment}/delete', [CommentController::class, 'destroy'])->name('comment.destroy');
});

Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/project/{project}', [ProjectController::class, 'show'])->name('project.show');

require __DIR__ . '/auth.php';
