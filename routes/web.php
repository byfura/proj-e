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
    return view('user/index-guest');
});

Route::get('u', function () {
    return view('user/index-user');
});

Route::get('s', function () {
    return view('user/index-supplier');
});

Route::get('s/{page}/i', function ($page) {
    return view('user/input/' . $page);
});

Route::get('s/{page}', function ($page) {
    return view('user/view/' . $page);
});

Route::get('u/{page}/i', function ($page) {
    return view('user/input/' . $page);
});

Route::get('u/{page}', function ($page) {
    return view('user/view/' . $page);
});


Route::get('login', function () {
    return view('user/login');
});

Route::get('contact-us', function () {
    return view('user/contact-us');
});

Route::get('about-us', function () {
    return view('user/about-us');
});

Route::get('support', function () {
    return view('user/support');
});

Route::get('terms-conds', function () {
    return view('user/terms-conds');
});

Route::get('register', function () {
    return view('user/register');
});

Route::get('register2', function () {
    return view('user/register-detail');
});

Route::get('register3', function () {
    return view('user/register-cc');
});

Route::get('forgot-password', function () {
    return view('user/forgot-password');
});

Route::get('forgot-password/confirm', function () {
    return view('user/new-password');
});

Route::get('product', function () {
    return view('user/product');
});

Route::get('product2', function () {
    return view('user/product2');
});

Route::get('product/{id}', function ($id) {
    return view('user/product-detail');
})
->where('id', '[0-9]+');

Route::get('supplier', function () {
    return view('user/supplier');
});

Route::get('supplier/{id}', function ($id) {
    return view('user/supplier-detail');
})
->where('id', '[0-9]+');

Route::get('checkout', function () {
    return view('user/checkout');
});

Route::get('admin', function () {
    return view('admin/index');
});

// Route::get('admin/table', function () {
//     return view('admin/tabletemplate');
// });

// Route::get('admin/user', function () {
//     return view('admin/usertemplate');
// });

Route::get('admin/{page}/i', function ($page) {
    return view('admin/input/' . $page);
});

Route::get('admin/{page}', function ($page) {
    return view('admin/view/' . $page);
});

