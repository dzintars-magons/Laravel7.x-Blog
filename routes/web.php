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

Route::get('/', 'HomeController@index');

Auth::routes(['register' => false]);

Route::view('/admin', 'blog.admin');

Route::post('/save-post', 'PostController@save');

Route::get('/edit-post/{id}', 'PostController@edit');

Route::post('/update-post/{id}', 'PostController@update');

Route::get('/delete-post/{id}', 'PostController@delete');