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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/kategori', 'KategoriController@index')->name('kategori');
Route::get('/kategori/create', 'KategoriController@create');
Route::post('/kategori', 'KategoriController@store');
Route::get('kategori/{id}/edit', 'KategoriController@edit');
Route::patch('kategori/{id}', 'KategoriController@update');
Route::delete('kategori/{id}', 'KategoriController@destroy');

Route::get('/post', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::post('/post', 'PostController@store');
Route::get('post/{id}/edit', 'PostController@edit');
Route::patch('post/{id}', 'PostController@update');
Route::delete('post/{id}', 'PostController@destroy');


Route::get('/photo', 'PhotoController@index');
Route::get('/photo/create', 'PhotoController@create');
Route::post('/photo', 'PhotoController@store');
Route::get('photo/{id}/edit', 'PhotoController@edit');
Route::patch('photo/{id}', 'PhotoController@update');
Route::delete('photo/{id}', 'PhotoController@destroy');

Route::get('/album', 'AlbumController@index');
Route::get('/album/create', 'AlbumController@create');
Route::post('/album', 'AlbumController@store');
Route::get('album/{id}/edit', 'AlbumController@edit');
Route::patch('album/{id}', 'AlbumController@update');
Route::delete('album/{id}', 'AlbumController@destroy');
