<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\PostsController;
Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');

Route::get('/posts/{post}/{titre}.html', [PostsController::class, 'show'])->name('posts.show');

use App\Http\Controllers\StatesController;
Route::get('/', [StatesController::class, 'index'])->name('states.index');

Route::get('/states/{state}/{name}.html', [StatesController::class, 'show'])->name('states.show');



