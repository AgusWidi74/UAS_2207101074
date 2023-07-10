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
Route::get('/penjualan','PenjualanController@index');
Route::get('/penjualan/create','PenjualanController@create');
Route::post('/penjualan','PenjualanController@store');
Route::get('penjualan/{id}/edit', 'PenjualanController@edit'); 
Route::patch('penjualan/{id}', 'PenjualanController@update');
Route::get('penjualan/{id}/lihat','PenjualanController@lihat');
Route::delete('penjualan/{id}', 'PenjualanController@destroy');
Route::get('penjualan/search', 'PenjualanController@search');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
