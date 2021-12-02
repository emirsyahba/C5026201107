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

// cara 2: tidak banyak load proses
Route::get('tugas4', function () {
    return view('htmltugas4');
});

Route::get('prak2', function () {
    return view('htmlprak2');
});

// cara 3: untuk load banyak proses
Route::get('ets', "ViewController@showEts");
Route::get('htmlphp', "ViewController@showForm");
Route::get('resultphp', "ViewController@showResult");


//route CRUD
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');

//route CRUD Tugas 25 November 2021
Route::get('/pendapatan', 'PendapatanController@index');
Route::get('/pendapatan/tambah', 'PendapatanController@tambah');
Route::post('/pendapatan/store', 'PendapatanController@store');
Route::get('/pendapatan/edit/{id}', 'PendapatanController@edit');
Route::post('/pendapatan/update', 'PendapatanController@update');
Route::get('/pendapatan/hapus/{id}', 'PendapatanController@hapus');

//route CRUD absen
Route::get('/absen', 'AbsenController@indexabsen');
Route::get('/absen/add', 'AbsenController@add');
Route::post('/absen/store', 'AbsenController@store');
Route::get('/absen/edit/{id}', 'AbsenController@edit');
Route::post('/absen/update', 'AbsenController@update');
Route::get('/absen/hapus/{id}', 'AbsenController@hapus');
