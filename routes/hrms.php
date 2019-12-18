<?php

/*
Admin Routes
*/

Auth::routes();
Route::group(['prefix'  =>  'hrms'], function () {
 
    Route::get('login', 'hrms\LoginController@showLoginForm')->name('hrms.login');
    Route::post('login', 'hrms\LoginController@login')->name('hrms.login.post');
    Route::get('logout', 'hrms\LoginController@logout')->name('hrms.logout');
 
    Route::group(['middleware' => ['auth:hrms']], function () {
 
        Route::get('/', function () {
            return view('hrms.dashboard.index');
        })->name('hrms.dashboard');
 
    });
});