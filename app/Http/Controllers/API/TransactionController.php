<?php

namespace App\Http\Controllers\API;

use Exception;
use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $product_id = $request->input('product_id');
        $status = $request->input('status');

        if ($id) {
            $transaction = Transaction::with(['product', 'user'])->find($id);

            if ($transaction) {
                return ResponseFormatter::success($transaction, 'Transaction Datas succesfully taken');
            } else {
                return ResponseFormatter::error(null, 'Transaction Datas is empty', 404);
            }
        }

        $transaction = Transaction::with('product', 'user')
            ->where('user_id', Auth::user()->id);

        if ($product_id) {
            $transaction->where('product_id', $product_id);
        }

        if ($status) {
            $transaction->where('status', $status);
        }

        return ResponseFormatter::success($transaction->paginate($limit), 'Transaction data list is successfully taken');
    }

    public function update(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);

        $transaction->update($request->all());

        return ResponseFormatter::success($transaction, 'Transaction has been successfully updated');
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'user_id' => 'required|exists:users,id',
            'quantity' => 'required',
            'total' => 'required',
            'status' => 'required'
        ]);

        // Cari produk berdasarkan product_id
        $product = Product::find($request->product_id);

        // Cek apakah stok cukup untuk transaksi
        if ($product->stock < $request->quantity) {
            return ResponseFormatter::error('Stok tidak cukup', 'Gagal membuat transaksi');
        }

        // Kurangi stok produk
        $product->stock -= $request->quantity;
        $product->save();

        // Buat transaksi
        $transaction = Transaction::create([
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
            'quantity' => $request->quantity,
            'total' => $request->total,
            'status' => $request->status,
            'payment_url' => ''
        ]);

        // Konfigurasi Midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        // Panggil transaksi yang baru dibuat
        $transaction = Transaction::with(['product', 'user'])->find($transaction->id);

        // Buat transaksi midtrans
        $midtrans = [
            'transaction_details' => [
                'order_id' => $transaction->id . time(),
                'gross_amount' => (int) $transaction->total
            ],
            'customer_details' => [
                'first_name' => $transaction->user->name,
                'email' => $transaction->user->email
            ],
            'enabled_payments' => [
                'gopay',
                'bank_transfer'
            ],
            'vtweb' => []
        ];

        // Panggil midtrans
        try {
            // Ambil halaman midtrans
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;

            $transaction->payment_url = $paymentUrl;
            $transaction->save();

            // Kembalikan data ke API
            return ResponseFormatter::success($transaction, 'Transaksi berhasil');
        } catch (Exception $e) {
            return ResponseFormatter::error($e->getMessage(), 'Transaksi gagal');
        }
    }

}
