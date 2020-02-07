<?php

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@dashboard')->name('dashboard');
Route::get('/tamu', 'HomeController@guest')->name('guest');

Route::get('/pengaturan', 'SettingController@index')->name('setting');
Route::put('/pengaturan/{id}', 'SettingController@update')->name('setting.update');
Route::get('/profil', 'SettingController@profile')->name('setting.profile');
Route::put('/profil', 'SettingController@updateProfile')->name('setting.profile_update');

Route::get('/gedung', 'SurveysController@index')->name('gedung');
Route::get('/survey', 'SurveysController@create')->name('survey');
Route::get('/survey/{id}', 'SurveysController@show');
Route::get('/cetak/{id}', 'SurveysController@print');

/*
 * Outlets Routes
 */
Route::get('/our_outlets', 'OutletMapController@index')->name('outlet_map.index');
Route::resource('outlets', 'OutletController');
