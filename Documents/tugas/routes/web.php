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
    return view('master.blank');
});
Route::get('/pertanyaan','PertanyaanController@index');//nampilin pertanyaan yang sudah dibuat
Route::get('/pertanyaan/create','PertanyaanController@create');//buat pertanyaan baru
Route::post('/pertanyaan','PertanyaanController@store');//menyimpan data ke database
Route::get('/jawaban/{pertanyaan_id}','JawabanController@index');//menampilkan jawaban dari pertanyaan dengan id tertentu
Route::get('/jawaban/{pertanyaan_id}','JawabanController@store');//menyimpan jawaban baru dengan id tertentu
