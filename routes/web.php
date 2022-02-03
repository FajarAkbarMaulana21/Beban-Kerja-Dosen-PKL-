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
    return view('auth/login');
});

Auth::routes();

// route::group(['middleware' => )
route::group(['middleware' => ['auth', 'CheckRole:Dosen']], function(){
    route::get('/', 'BerandaController@index')->name('dashboard.user');
    Route::resource('/kinerja-penunjang','KinerjaPenunjangController');
    Route::resource('/profil','profilController');
});

route::group(['middleware' => ['auth', 'CheckRole:Admin']], function(){
    route::get('/admin', 'BerandaController@index');
    Route::resource('/admin/biodata','biodataController');
    Route::resource('/admin/penunjang','PenunjangController');
});




