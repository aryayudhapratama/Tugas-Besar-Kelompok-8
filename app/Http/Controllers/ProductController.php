<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Menampilkan semua produk
    public function index()
    {
        // $products = Product::all();
        // return response()->json($products);
        $products = Product::all();
        return view('admin.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = 'Create Product';

        // ELOQUENT
        $products = Product::all();

        return view('admin.create', compact('pageTitle', 'products'));
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka',
            'unique' => ':attribute harus unik'
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'picture' => 'required|mimes:png,jpg,jpeg|max:2048',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $picture = $request->file('picture');
        $filename = date('Y-m-d').$picture->getClientOriginalName();
        $path = 'product-picture/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($picture));

            // ELOQUENT
            $product = New Product;
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->stock = $request->stock;
            $product->picture = $filename;
            $product->save();

            return redirect()->route('products.index');
    }

    // Menampilkan produk berdasarkan ID
    public function show($id)
    {
        $pageTitle = 'Product Detail';

        // ELOQUENT
        $product = Product::find($id);

        return view('admin.show', compact('pageTitle', 'product'));
    }

    // Memperbarui produk berdasarkan ID
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'string|max:255',
            'description' => 'string',
            'price' => 'numeric',
            'stock' => 'integer',
        ]);

        $product->update($request->all());

        return response()->json(['message' => 'Product updated successfully', 'product' => $product]);
    }

    // Menghapus produk berdasarkan ID
    public function destroy($id)
    {
        Product::find($id)->delete();

        return redirect()->route('products.index');
    }
}
