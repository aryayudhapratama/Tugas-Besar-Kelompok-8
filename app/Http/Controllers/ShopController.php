<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function index()
    {
        $pageTitle = 'Shopping Page';

        $products = Product::all();
        return view('shop', compact('products', 'pageTitle'));
    }

    public function show($id)
    {
        $pageTitle = 'Details Produk';

        $product = Product::findOrFail($id);
        return view('details', compact('product', 'pageTitle'));
    }
}
