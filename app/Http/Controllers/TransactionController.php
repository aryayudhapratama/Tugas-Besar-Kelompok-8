<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;

class TransactionController extends Controller
{
    // Menampilkan semua transaksi
    public function index()
    {

        $transactions = Transaction::with('product')->get();
        return response()->json($transactions);
    }

    // Menyimpan transaksi baru
    public function store(Request $request)
    {
        $request->validate([
            'transaction_date' => 'required|date',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min=1',
        ]);

        // Ambil produk berdasarkan id
        $product = Product::find($request->product_id);

        // Kurangi stok produk
        $product->reduceStock($request->quantity);

        // Buat transaksi baru
        $transaction = Transaction::create([
            'transaction_date' => $request->transaction_date,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
        ]);

        return response()->json(['message' => 'Transaction created successfully', 'transaction' => $transaction], 201);
    }

    // Menampilkan transaksi berdasarkan ID
    public function show($id)
    {
        $transaction = Transaction::with('product')->findOrFail($id);
        return response()->json($transaction);
    }

    // Menghapus transaksi berdasarkan ID
    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return response()->json(['message' => 'Transaction deleted successfully']);
    }
}

