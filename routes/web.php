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

Route::get('/', 'HomeController@index')->name('index');

Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/posts/{slug}', 'PostController@show')->name('posts.show');
Route::get('/contatti', 'HomeController@contatti')->name('contatti');
Route::post('/contatti', 'HomeController@sentContact')->name('contatti.sent');

Auth::routes();

Route::prefix('admin')
->namespace('Admin')
->middleware('auth')
->group(function () {
Route::get('/', 'HomeController@index')->name('home');
Route::resource('/post', 'PostController');
});