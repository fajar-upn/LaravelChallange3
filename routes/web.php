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
    return view('welcomeku');
});

//pertanyaanController
Route::get('/pertanyaan','PertanyaanController@index');
Route::get('/pertanyaan/create','PertanyaanController@create');
Route::post('/pertanyaan','PertanyaanController@store');
Route::get('/pertanyaan/{pertanyaan}','PertanyaanController@show');

//jawabanController
Route::get('/jawaban/{pertanyaan}','JawabanController@index');
Route::get('/jawaban/create/{pertanyaan}','JawabanController@create');
Route::post('/jawaban/{pertanyaan}','JawabanController@store');
Route::delete('/jawaban/{petanyaan}', 'JawabanController@destroy');


