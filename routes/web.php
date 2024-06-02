<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;


Route::get('/', function () {
    return view('auth.login');
});

// Route Admin
Route::get('admin', function () {
    return view('admin.index');
});

Route::get('/product', [ProductController::class, 'index']);

Route::get('transaction', function () {
    return view('admin.transaction');
});

Route::get('user', function () {
    return view('admin.user');
});

// Rute resource untuk produk
Route::resource('products', ProductController::class);

// Rute resource untuk transaksi
Route::resource('transactions', TransactionController::class);

// end admin

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);

Route::get('/shop', [ShopController::class, 'index']);
