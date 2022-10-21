<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostsFromUserController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', function () {    return view('home'); });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/postsfromuser/show', [PostsFromUserController::class, 'show']);  // ukaze prispevky prihlaseneho uzivatele
Route::get('/postsfromuser/{id}', [PostsFromUserController::class, 'show']);     // ukaze prispevky konkretniho uzivatele
Route::get('/posts/store', [PostsController::class, 'store']);     // ukaze prispevky konkretniho uzivatele
Route::resource('/posts', PostsController::class); //prace se vsemi prispevky

Auth::routes();
