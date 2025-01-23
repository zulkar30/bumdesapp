<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Transaction::with(['product', 'user'])->orderBy('created_at', 'desc');

        // Filter berdasarkan nama produk jika ada
        if ($request->has('product') && $request->get('product') != '') {
            $query->where('product_id', $request->get('product'));
        }

        // Filter berdasarkan status jika ada
        if ($request->has('status') && $request->get('status') != '') {
            $query->where('status', $request->get('status'));
        }

        $transaction = $query->paginate(10);
        $products = Product::all(); // Mengambil daftar produk untuk filter

        return view('transaction.index', compact('transaction', 'products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        return view('transaction.detail', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('transaction.index')->with('success', 'Transaksi berhasil dihapus');
    }

    public function changeStatus(Request $request, $id, $status)
    {
        $transaction = Transaction::findOrFail($id);

        $transaction->status = $status;
        $transaction->save();

        return redirect()->route('transaction.index')->with('success', 'Status berhail diganti');
    }

    public function salesHistory()
    {
        $history = Transaction::with('product') // Relasi dengan produk
            ->selectRaw('product_id, SUM(quantity) as total_sold, SUM(total) as total_revenue')
            ->where('status', 'delivered') // Hanya transaksi selesai
            ->groupBy('product_id')
            ->get()
            ->map(function ($transaction) {
                return [
                    'name' => $transaction->product->name, // Nama produk
                    'total_sold' => $transaction->total_sold, // Jumlah terjual
                    'total_revenue' => $transaction->total_revenue, // Total pendapatan
                ];
            });

        return view('transaction.sales-history', compact('history'));
    }

}
