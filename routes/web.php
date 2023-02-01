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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

//Route::get('/muscle', function () {
//    return view('muscle');
//});
Route::resource('muscle', 'App\Http\Controllers\MusclesController');
Route::resource('userExercises', 'App\Http\Controllers\UserExercisesController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/history', [App\Http\Controllers\HomeController::class, 'history'])->name('history');
