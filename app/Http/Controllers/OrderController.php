<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function index()
    {
        // Logika untuk menampilkan halaman pesanan
        return view('Order');
    }

}
