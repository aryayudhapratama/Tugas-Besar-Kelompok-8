<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LogoutController;


// Route Admin
Route::get('/admin', function () {
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



//tampilan fitur
Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
//login
Route::post('login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

