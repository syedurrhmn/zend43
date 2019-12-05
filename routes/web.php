<?php

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
Route::get('/', function(){
    return view('frontend.pages.index');
});

Route::get('/cart', function(){
    return view('frontend.pages.cart');
});

Route::get('/catalog-list', function(){
    return view('frontend.pages.catalog-list-page');
});

Route::get('/checkout', function(){
    return view('frontend.pages.checkout');
});

Route::get('/product-detail', function(){
    return view('frontend.pages.product-detail');
});

Route::get('/register', function(){
    return view('frontend.pages.register');
});

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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
