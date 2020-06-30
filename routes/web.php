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

Route::get('/mahasiswa', 'mahasiswa@index');
Route::post('/mahasiswaInput', 'mahasiswa@input');
Route::get('/mahasiswa/edit/{id}', 'mahasiswa@updateView');
Route::post('/mahasiswa/update', 'mahasiswa@update');
Route::get('/mahasiswa/delete/{id}', 'mahasiswa@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
