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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/mahasiswa', 'MahasiswaController@show');

Route::get('/mahasiswa/create', function () {
    return view('mahasiswa_create');
});

Route::post('/mahasiswa/store', 'MahasiswaController@store');
Route::get('/mahasiswa/hapus/{id}','MahasiswaController@destroy');
Route::get('/mahasiswa/edit/{id}','MahasiswaController@edit');
