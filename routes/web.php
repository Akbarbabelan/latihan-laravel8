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

Route::get('/customer', function () {
    return view('customer', [
        "title" => "Customer"
    ]);
});

Route::get('/branch', function () {
    return view('branch', [
        "title" => "Branch"
    ]);
});

Route::get('/account', function () {
    return view('account', [
        "title" => "Account"
    ]);
});
