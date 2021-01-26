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

//-------------USUARIO----------------------------------------------------
Route::get('/user', 'UserController@index')->name('user.index');
Route::post('/user/store', 'UserController@store')->name('user.store');
Route::get('/user/crear', 'UserController@create')->name('user.create');
Route::get('/user/{id}', 'UserController@show')->name('user.show');
Route::get('/user/{id}/editar', 'UserController@edit')->name('user.edit');
Route::put('/user/{id}', 'UserController@update')->name('user.update');
Route::delete('/user/{id}/borrar', 'UserController@destroy')->name('user.destroy');
//-------------USUARIO----------------------------------------------------

//-------------MULTIMEDIA----------------------------------------------------
Route::get('/multimedia', 'MultimediaController@index')->name('multimedia.index');
Route::post('/multimedia/store', 'MultimediaController@store')->name('multimedia.store');
Route::get('/multimedia/crear', 'MultimediaController@create')->name('multimedia.create');
Route::get('/multimedia/{id}', 'MultimediaController@show')->name('multimedia.show');
Route::get('/multimedia/{id}/editar', 'MultimediaController@edit')->name('multimedia.edit');
Route::put('/multimedia/{id}', 'MultimediaController@update')->name('multimedia.update');
Route::delete('/multimedia/{id}/borrar', 'MultimediaController@destroy')->name('multimedia.destroy');
//-------------MULTIMEDIA----------------------------------------------------

//-------------TEMAS----------------------------------------------------
Route::get('/theme', 'ThemeController@index')->name('theme.index');
Route::post('/theme/store', 'ThemeController@store')->name('theme.store');
Route::get('/theme/crear', 'ThemeController@create')->name('theme.create');
Route::get('/theme/{id}', 'ThemeController@show')->name('theme.show');
Route::get('/theme/{id}/editar', 'ThemeController@edit')->name('theme.edit');
Route::put('/theme/{id}', 'ThemeController@update')->name('theme.update');
Route::delete('/theme/{id}/borrar', 'ThemeController@destroy')->name('theme.destroy');
//-------------TEMAS------------------------------------------------------------------

//-------------PREGUNTAS-----------------------------------------------------------------
Route::get('/question', 'QuestionController@index')->name('question.index');
Route::post('/question/store', 'QuestionController@store')->name('question.store');
Route::get('/question/crear', 'QuestionController@create')->name('question.create');
Route::get('/question/{id}', 'QuestionController@show')->name('question.show');
Route::get('/question/{id}/editar', 'QuestionController@edit')->name('question.edit');
Route::put('/question/{id}', 'QuestionController@update')->name('question.update');
Route::delete('/question/{id}/borrar', 'QuestionController@destroy')->name('question.destroy');
//-------------PREGUNTAS-----------------------------------------------------------------