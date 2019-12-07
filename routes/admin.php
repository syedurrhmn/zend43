<?php

/*
Admin Routes
*/

Auth::routes();
Route::group(['prefix'  =>  'admin'], function () {
 
    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');
 
    Route::group(['middleware' => ['auth:admin']], function () {
 
        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');
 
    });
});

/*
Route::get('/admin', function(){
    return view('admin.dashboard.index');
});

Route::get('/dashboard2', function(){
    return view('admin.dashboard.index2');
});

Route::get('/calendar', function(){
    return view('admin.dashboard.calendar');
});

Route::get('/page-error', function(){
    return view('admin.dashboard.page-error');
});

Route::get('/invoice', function(){
    return view('admin.dashboard.invoice');
});
*/