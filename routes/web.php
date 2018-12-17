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
    return view('welcome');
});

Route::get('/tryout', function(){
    return view('tryout');
});


Route::resource('soals','SoalsController');
Route::resource('posts','PostsController');
Route::resource('log','LogController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
