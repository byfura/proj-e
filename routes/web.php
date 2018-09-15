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

Route::get('/', function () {
    return view('user/index2');
});

Route::get('/product', function () {
    return view('user/product');
});

Route::get('/product/{id}', function ($id) {
    return view('user/product-detail');
})
->where('id', '[0-9]+');

Route::get('/supplier', function () {
    return view('user/supplier');
});

Route::get('/supplier/{id}', function ($id) {
    return view('user/supplier-detail');
})
->where('id', '[0-9]+');

Route::get('/product2', function () {
    return view('user/product2');
});

Route::get('/admin', function () {
    return view('admin/index');
});

