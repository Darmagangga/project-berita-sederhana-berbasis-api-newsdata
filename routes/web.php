<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [HomeController::class,'index']);
Route::get('/search', [HomeController::class,'search']);



Route::get('/post', [PostController::class, 'index']);
Route::post('/post-get', [PostController::class, 'getNews']);
Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'login']);    
Route::post('/logout', [LoginController::class,'logout']);    
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'add']);
Route::get('/post/{id_articles}', [PostController::class,'show'])->name('post.show');
