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

Route::get('/login','login@index')->middleware('guest');
Route::post('/login','login@Masuk')->name('do_login');
Route::get('/logout','login@index');
Route::get('/pengguna','Berhasil@pengguna')->middleware('auth:pengguna');
Route::get('/penggurus','Berhasil@penggurus')->middleware('auth:penggurus');

