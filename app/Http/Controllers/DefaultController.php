<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DefaultController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('dashboard');
    }

    public function home(): View
    {
        return view('home');
    }

    public function about(): View
    {
        return view('about');
    }

    public function contact(): View
    {
        return view('contact');
    }

    public function license(): View
    {
        return view('license');
    }

    public function dashboard(): View
    {
        $clients = Client::count();
        $products = Product::count();
        $categories = Category::count();
        $transactions = Transaction::count();

        return view('dashboard.index', compact(['clients', 'categories', 'products', 'transactions']));
    }
}
