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
Route::get('/surat', function () {
    return view('surat');
});
Route::get('/surat_view','SuratController@read');

Route::post('/edit', 'SuratController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
