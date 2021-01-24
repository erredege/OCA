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
    return view('user.index');
});

//-------------USUARIO----------------------------------------------------

Route::get('/user', 'UserController@index')->name('user.index');
Route::post('/user/store', 'UserController@store')->name('user.store');
Route::get('/user/crear', 'UserController@create')->name('user.create');
Route::get('/user/{id}', 'UserController@show')->name('user.show');
Route::get('/user/{id}/editar', 'UserController@edit')->name('user.edit');
Route::put('/user/{id}', 'UserController@update')->name('user.update');
Route::delete('/user/{id}/borrar', 'UserController@destroy')->name('user.destroy');

//-------------USUARIO----------------------------------------------------

//-------------TEMAS----------------------------------------------------
Route::get('/theme', 'ThemeController@index')->name('theme.index');
Route::post('/theme/store', 'ThemeController@store')->name('theme.store');
Route::get('/theme/crear', 'ThemeController@create')->name('theme.create');
Route::get('/theme/{id}', 'ThemeController@show')->name('theme.show');
Route::get('/theme/{id}/editar', 'ThemeController@edit')->name('theme.edit');
Route::put('/theme/{id}', 'ThemeController@update')->name('theme.update');
Route::delete('/theme/{id}/borrar', 'ThemeController@destroy')->name('theme.destroy');
//-------------TEMAS----------------------------------------------------