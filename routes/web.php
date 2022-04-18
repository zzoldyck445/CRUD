<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Crud\PostsController;

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

// Route to landing page
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Laravel 8  (New way of routing)
// the 'use App\Http\Controllers' is been defined above so that it's not  too long when calling the path for the selected controller file
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/posts', [PostsController::class, 'index']);
Route::get('/home/create', [PostsController::class, 'create']);
Route::post('home', [PostsController::class, 'store']);
// Route::get('home/{post}/view', [PostsController::class, 'show']);
Route::get('/home/{post}/edit', [PostsController::class, 'edit']);
Route::put('/home/{post}', [PostsController::class, 'update']);
Route::delete('/home/{post}', [PostsController::class, 'destroy']);


