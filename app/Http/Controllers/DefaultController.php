<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\Store;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['home']);
    }

    public function home()
    {
        return view('home');
    }

    public function dashboard()
    {
        $stores = Store::count();
        $clients = Client::count();
        $products = Product::count();
        $transactions = Transaction::count();

        return view('dashboard.index', compact(['stores', 'clients', 'products', 'transactions']));
    }
}
