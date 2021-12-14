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


//route CRUD Pegawai
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');
Route::get('/pegawai/cari', 'PegawaiController@cari');
Route::get('/pegawai/view/{id}', 'PegawaiController@detail');

//route CRUD Tugas 25 November 2021 Pendapatan
Route::get('/pendapatan', 'PendapatanController@index');
Route::get('/pendapatan/tambah', 'PendapatanController@tambah');
Route::post('/pendapatan/store', 'PendapatanController@store');
Route::get('/pendapatan/edit/{id}', 'PendapatanController@edit');
Route::post('/pendapatan/update', 'PendapatanController@update');
Route::get('/pendapatan/hapus/{id}', 'PendapatanController@hapus');
Route::get('/pendapatan/cari', 'PendapatanController@cari');
Route::get('/pendapatan/view/{id}', 'PendapatanController@detail');

//route CRUD Absen
Route::get('/absen', 'AbsenController@indexabsen');
Route::get('/absen/add', 'AbsenController@add');
Route::post('/absen/store', 'AbsenController@store');
Route::get('/absen/edit/{id}', 'AbsenController@edit');
Route::post('/absen/update', 'AbsenController@update');
Route::get('/absen/hapus/{id}', 'AbsenController@hapus');
Route::get('/absen/cari', 'AbsenController@cari');
Route::get('/absen/view/{id}', 'AbsenController@detail');

//route Praktikum 'Laptop'
Route::get('/laptop', 'LaptopController@index');
Route::get('/laptop/tambah', 'LaptopController@tambah');
Route::post('/laptop/store', 'LaptopController@store');
Route::get('/laptop/edit/{id}', 'LaptopController@edit');
Route::post('/laptop/update', 'LaptopController@update');
Route::get('/laptop/hapus/{id}', 'LaptopController@hapus');
Route::get('/laptop/cari', 'LaptopController@cari');
Route::get('/laptop/view/{id}', 'LaptopController@detail');
