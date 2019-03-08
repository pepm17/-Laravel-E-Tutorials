<?php

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
    return view('index');
})->name('/')->middleware('guest');

Auth::routes();
Route::get('post/{id}', 'PostController@create')->name('post');
Route::resource('tutorial', 'TutorialController');
Route::resource('post', 'PostController');
