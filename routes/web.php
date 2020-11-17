<?php

use Illuminate\Support\Facades\Route;

// Routing 
Route::get('/', 'HomeController@index');
Route::get('/pasien', 'HomeController@getdetailpasien');

Route::get('/login', 'AdminController@login')->name('login-admin');
Route::post('/login', 'AdminController@postlogin');
Route::get('/register', 'AdminController@register');
Route::post('/register', 'AdminController@postregister');
Route::prefix('/admin')->group(function () {
    Route::get('/', 'AdminController@index')->middleware('status_login')->name('admin-index');
    Route::post('/logout', 'AdminController@logout');
    Route::prefix('/pasien')->group(function () {
        Route::get('/', 'AdminController@listpasien')->middleware('status_login')->name('pasien-index');
        Route::get('/tambah-pasien', 'AdminController@tambahpasien')->middleware('status_login')->name('tambah-pasien');
        Route::post('/tambah-pasien', 'AdminController@posttambahpasien')->name('post-tambah-pasien');
    });
});
