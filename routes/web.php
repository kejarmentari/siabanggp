<?php

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@dashboard')->name('dashboard');
Route::get('/tamu', 'HomeController@guest')->name('guest');

/*
 * Outlets Routes
 */
Route::get('/our_outlets', 'OutletMapController@index')->name('outlet_map.index');
Route::resource('outlets', 'OutletController');
