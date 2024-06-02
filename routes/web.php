<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\RegistrasiController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/registrasi', [RegistrasiController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
