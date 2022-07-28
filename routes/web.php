<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use Spatie\YamlFrontMatter\YamlFrontMatter;


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

Route::post('newsletter', NewsletterController::class);


Route::get('/', [PostController::class, 'index'])->name('home');


Route::get('posts/{post}', [PostController::class, 'show']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('posts/{post:id}/comments', [PostController::class, 'storeComment'])->middleware('auth');

Route::get('admin/posts/create',[AdminPostController::class, 'create'])->middleware('admin');

Route::post('admin/posts', [AdminPostController::class, 'store'])->middleware('admin');
Route::get('admin/posts/',[AdminPostController::class , 'index'])->middleware('admin');
Route::get('admin/posts/{post:id}/edit', [AdminPostController::class, 'edit'])->middleware('admin');
Route::patch('admin/posts/{post:id}', [AdminPostController::class, 'update'])->middleware('admin');
Route::delete('admin/posts/{post:id}', [AdminPostController::class, 'destroy'])->middleware('admin');
