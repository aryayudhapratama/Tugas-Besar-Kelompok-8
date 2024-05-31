<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

// Route Admin
Route::get('admin', function () {
    return view('admin');
});
Route::get('table', function () {
    return view('table');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);

Route::get('/shop', [ShopController::class, 'index']);