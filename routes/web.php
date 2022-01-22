<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('landingpage');
});

Auth::routes();

//Profil dan Dashboard
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profil', 'HomeController@edit');
Route::post('/profil', 'HomeController@store');
Route::get('/search','KBController@search');
Route::get('/riwayat','RPController@index');
Route::get('/syarat','RPController@pinjam');


//Buku
Route::get('/buku', 'KBController@index');
Route::post('/buku','KBController@store');
Route::get('/buku/{id}/edit','KBController@edit');
Route::post('/buku/{id}/update','KBController@update');
Route::delete('/buku/{id}/delete','KBController@destroy');


//Peminjaman
Route::get('/pinjam/{id}', 'KBController@show');
Route::post('/pinjam/{id}/pinjambuku', 'RPController@store');
Route::delete('/riwayat/{id}/delete','RPController@destroy');

//Login Google
Route::get('/auth/google','GoogleController@redirectToGoogle')->name('google.login');
Route::get('/auth/google/callback','GoogleController@handleGoogleCallback')->name('google.callback');


