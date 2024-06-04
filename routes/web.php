<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrasiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;


// Route Admin
Route::get('admin', function () {
    return view('admin.index');
});

Route::get('/product', [ProductController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);

Route::get('transaction', function () {
    return view('admin.transaction');
});

// Rute resource untuk produk
Route::resource('products', ProductController::class);

// Rute resource untuk produk
Route::resource('users', UserController::class);

// Rute resource untuk transaksi
Route::resource('transactions', TransactionController::class);

// end admin

//Login Regis
Auth::routes();
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/registrasi', function () {
    return view('auth.registrasi');
});


//tampilan fitur
Route::get('/home', [HomeController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);


