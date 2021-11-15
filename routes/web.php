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
