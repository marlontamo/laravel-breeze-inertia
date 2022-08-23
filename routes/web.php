<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home',function(){
   return Inertia::render('Home');
});
Route::get('/posts', [PostController::class,'index'])->name('posts.index');
Route::get('/post/{id}',[PostController::class,'show'])->name('view');
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
/**
 * Image
 */
Route::get('image', [ImageController::class,'index'])->name('image.index');
Route::get('image/create', [ImageController::class,'create'])->name('image.create');
Route::post('image', [ImageController::class,'store'])->name('image.store');

require __DIR__.'/auth.php';
