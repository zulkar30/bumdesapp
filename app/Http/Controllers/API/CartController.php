<?php

namespace App\Http\Controllers\API;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Mengambil item keranjang untuk user yang sedang login
    public function getCartItems()
    {
        $user = Auth::user(); // Mendapatkan user yang sedang login
        $cartItems = Cart::with('product') // Memuat data produk terkait
        ->where('user_id', $user->id)
        ->get(); // Mengambil semua item dari keranjang user

        return response()->json($cartItems);
    }

    // Menambahkan item ke dalam keranjang
    public function addToCart(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'productId' => 'required|exists:products,id', // Pastikan productId valid dan ada di database
            'quantity' => 'required|integer|min:1', // Pastikan quantity lebih dari 0
        ]);

        $user = Auth::user(); // Mendapatkan user yang sedang login
        $product = Product::find($request->productId); // Mencari produk berdasarkan ID

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        // Memeriksa apakah produk sudah ada di keranjang
        $cartItem = Cart::where('user_id', $user->id)->where('product_id', $product->id)->first();

        if ($cartItem) {
            // Jika produk sudah ada, update jumlahnya
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
            // Mengembalikan item keranjang yang sudah diperbarui
            return response()->json($cartItem, 200);
        } else {
            // Jika produk belum ada di keranjang, buat entri baru
            $cartItem = Cart::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'quantity' => $request->quantity,
            ]);
            // Mengembalikan item keranjang yang baru dibuat
            return response()->json($cartItem, 201);
        }
    }

    // Menghapus item dari keranjang
    public function removeFromCart($productId)
    {
        $user = Auth::user(); // Mendapatkan user yang sedang login

        // Cari item keranjang berdasarkan user_id dan product_id
        $cartItem = Cart::where('user_id', $user->id)
                        ->where('product_id', $productId)
                        ->first();

        if (!$cartItem) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        $cartItem->delete(); // Menghapus item dari keranjang

        return response()->json(['message' => 'Produk berhasil dihapus dari Keranjang'], 200);
    }

}
