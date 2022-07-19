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
    return view('auth/login')->name('login');
});

Auth::routes();

// route::group(['middleware' => )
route::group(['middleware' => ['auth', 'CheckRole:Dosen']], function(){
    route::get('/', 'BerandaController@index')->name('dashboard.user');
    Route::resource('/kinerja-penunjang','KinerjaPenunjangController');
    Route::resource('/kinerja-penelitian','KinerjaPenelitianController');
    Route::resource('/profil','profilController');

    Route::post('/getSubkegiatan','KinerjaPenunjangController@getSubkegiatan')->name('getSubkegiatan');
    Route::post('/getSubpen','KinerjaPenelitianController@getSubpen')->name('getSubpen');

});

route::group(['middleware' => ['auth', 'CheckRole:Admin']], function(){
    route::get('/admin', 'BerandaController@index')->name('dashboard.admin');
    Route::resource('/admin/biodata','biodataController');
    Route::resource('/admin/penunjang','PenunjangController');
    Route::get('/admin/sendpenunjang/{id}', 'PenunjangController@sendToAssesor')->name('sendtoassesorpenunjang');
    Route::resource('/admin/penelitian','PenelitianController');
    Route::get('/admin/sendpenelitian/{id}', 'PenelitianController@sendToAssesor')->name('sendtoassesorpenelitian');
    Route::resource('/admin/assesor','assesorController');

});

route::group(['middleware' => ['auth', 'CheckRole:Assesor']], function(){
    route::get('/assesor', 'BerandaController@index')->name('dashboard.assesor');
    route::resource('/assesor/data-penelitian', 'DataPenilaianController');
    route::get('/assesor/data-penelitian/selesai/{id}', 'DataPenilaianController@selesai')->name('data-penelitian.selesai');
});




