<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    private function updateProductRating($productId)
    {
        // Temukan produk berdasarkan ID
        $product = Product::find($productId);

        // Periksa jika produk ditemukan
        if (!$product) {
            // Jika produk tidak ditemukan, Anda bisa menangani ini dengan mengirimkan error atau log
            return;
        }

        // Hitung rating rata-rata produk
        $averageRating = Review::where('product_id', $productId)->avg('rate');

        // Update rating produk
        $product->update([
            'rate' => round($averageRating, 1), // Perbarui dengan rata-rata rating (gunakan 'rating' jika kolomnya bernama itu)
        ]);
    }


    // Fungsi untuk membuat ulasan baru
    public function store(Request $request, $productId)
    {
        // Validasi data yang diterima
        $request->validate([
            'rate' => 'required|integer|min:1|max:5',
            'review' => 'required|string|max:255',
        ]);

        // Simpan ulasan
        $review = Review::create([
            'user_id' => Auth::id(), // Ambil user yang sedang login
            'product_id' => $productId,
            'rate' => $request->rate,
            'review' => $request->review,
        ]);

        // Memuat data pengguna terkait
        $review->load('user'); // Memuat relasi 'user' pada ulasan

        // Setelah ulasan disimpan, perbarui rating produk
        $this->updateProductRating($productId);

        // Kembalikan respons dengan data ulasan dan data pengguna yang baru disimpan
        return response()->json([
            'message' => 'Review submitted successfully!',
            'data' => $review
        ], 201);
    }


    // Fungsi untuk mendapatkan semua ulasan untuk sebuah produk
    public function index($productId)
    {
        // Menggunakan eager loading untuk memuat data pengguna
        $reviews = Review::with('user') // Memuat relasi 'user' dengan Review
            ->where('product_id', $productId)
            ->get();

        return response()->json([
            'message' => 'Reviews fetched successfully!',
            'data' => $reviews
        ], 200);
    }

}
