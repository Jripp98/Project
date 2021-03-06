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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/tampildata', 'PengunjungController@readdata');
Route::get('/tambahdata','PengunjungController@input');
Route::post('/pengunjung/store', 'PengunjungController@store');

Route::get('/pengunjung/edit/{plat}', 'PengunjungController@edit');
Route::post('/pengunjung/update', 'PengunjungController@update');
Route::get('/pengunjung/hapus/{plat}', 'PengunjungController@hapus');
