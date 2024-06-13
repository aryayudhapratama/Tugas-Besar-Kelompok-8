<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DisplayShopController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\Transaction;

// user
Route::get('/', function () {
    return view('user.homeUser');
});

Route::get('/shopUser', [DisplayShopController::class, 'index']);
Route::get('/detailUser/{id}', [DisplayShopController::class, 'show'])->name('detailsUser');

Route::get('/aboutUser', function () {
    return view('user.aboutUser');
});

Route::get('/', [DisplayController::class, 'home']);

Route::get('/aboutUser', [DisplayController::class, 'about']);
// end user

// Route Admin
Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/product', [ProductController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);

Route::get('/transaction', [TransactionController::class, 'index']);

// Rute resource untuk produk
Route::resource('products', ProductController::class);

// Rute resource untuk produk
Route::resource('users', UserController::class);

// Rute resource untuk transaksi
Route::resource('transactions', TransactionController::class);

// end admin

//Login Regis
//tampilan fitur
Route::get('/home', [HomeController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/detail/{id}', [ShopController::class, 'show'])->name('details');
Route::get('/about', [AboutController::class, 'index']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
//login
Route::post('login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
