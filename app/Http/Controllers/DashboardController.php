<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    public function index()
    {
        $newProducts = Cache::remember('new_products', 60, function () {
            return Product::where('created_at', '>=', now()->subDay())->count();
        });
        
        $newTransactions = Cache::remember('new_transactionss', 60, function () {
            return User::where('created_at', '>=', now()->subDay())->count();
        });
        
        $newUsers = Cache::remember('new_users', 60, function () {
            return User::where('created_at', '>=', now()->subDay())->count();
        });
        
        return view('dashboard', compact('newProducts', 'newTransactions', 'newUsers'));
    }
}
