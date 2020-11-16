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
//rute web untuk akses website
Route::get('/', 'SiteController@home');
Route::get('/register','SiteController@register');
Route::get('/registerpelanggan','SiteController@registerpelanggan');
Route::post('/postregister','SiteController@postregister');
Route::post('/postregister2','SiteController@postregister2');
Route::post('/lupa','SiteController@lupa');
Route::post('/recover','SiteController@recover');



Route::get('login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');


Route::group(['middleware' => ['auth','cekrole:admin']],function(){
  Route::get('/dashboard','DashboardController@index');

  Route::get('/akun','AkunController@index');
  Route::get('/profiladmin','AkunController@profiladmin');
  Route::get('/akun/{id}/edit','AkunController@edit');
  // Route::post('/akun/{id}/update','AkunController@update');
  // Route::get('/akun/{id}/delete','AkunController@delete'); TIDAK diimplementasikan

  Route::get('/wisata','WisataController@index');
  Route::get('/wisata/{id}/data','WisataController@data');
  Route::get('/wisata/{id}/editstatus','WisataController@editstatus');
  Route::post('/wisata/{id}/update','WisataController@update');

  Route::get('/arsitek','arsitekController@index');
  // Route::post('/arsitek/create','arsitekController@create');
  // Route::get('/arsitek/{id}/edit','arsitekController@edit');
  // Route::post('/arsitek/{id}/update','arsitekController@update');
  // Route::get('/arsitek/{id}/delete','arsitekController@delete'); Tidak diimplementasikan
  Route::get('/arsitek/{id}/profile','arsitekController@profile');
  Route::get('/arsitek/{id}/ktp','arsitekController@ktp');

  Route::get('/pelanggan','pelangganController@index');
  // Route::post('/pelanggan/create','pelangganController@create');
  // Route::get('/pelanggan/{id}/edit','pelangganController@edit');
  // Route::post('/pelanggan/{id}/update','pelangganController@update');
  // Route::get('/pelanggan/{id}/delete','pelangganController@delete'); TIDAK diimplementasikan
  Route::get('/pelanggan/{id}/profile','pelangganController@profile');
});

Route::group(['middleware' => ['auth','cekrole:admin,arsitek,pelanggan']],function(){
  Route::get('/dashboard','DashboardController@index');
  Route::get('password', 'AkunController@change')->name('password.change');
  Route::put('password', 'AkunController@updatepass')->name('password.update');
});

Route::group(['middleware' => ['auth','cekrole:arsitek']],function(){
  Route::get('/profilku','arsitekController@profilku');
  Route::get('/arsitek/{id}/edit','arsitekController@edit');
  Route::post('/arsitek/{id}/update','arsitekController@update');

});

Route::group(['middleware' => ['auth','cekrole:pelanggan']],function(){
  Route::get('/profilsaya','pelangganController@profilsaya');
  Route::get('/pelanggan/{id}/edit','pelangganController@edit');
  Route::post('/pelanggan/{id}/update','pelangganController@update');

});
