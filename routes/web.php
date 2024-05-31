<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route Admin
Route::get('admin', function () {
    return view('admin');
});
Route::get('table', function () {
    return view('table');
});

