<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Pages\PosterController;
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

Route::get('/', [PagesController::class,'homepage']);

Route::get('/login',function(){ return view('login'); });
Route::get('/detail/{movie}',[PagesController::class,'movie_detail'])->name('movie_details');
Route::get('/dashboard',function(){ return view('dashboard'); });
Route::get('/add_movie',[PagesController::class,'add_movie']);
Route::post('/add_movie',[PagesController::class,'submit_movie'])->name('add_movie_form');
Route::get('/poster_register',[PosterController::class,'poster_register']);
Route::post('/poster_register',[PosterController::class,'submit_register'])->name('register');
