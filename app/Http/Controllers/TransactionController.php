<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $transactions = Transaction::paginate(20);
        return view('transaction.index', compact('transactions'));
    }

    public function create()
    {
        $clients = Client::all();
        $products = Product::all();
        return view('transaction.create', compact(['clients', 'products']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product' => 'required', 'integer', 'min:1',
            'quantity' => 'required', 'integer', 'min:1',
            'type' => 'required'
        ]);

        $product = Product::find($request['product']);

        if ($request['type'] == 'sale') $total = $product->selling_price * $request['quantity'];
        else $total = $product->buying_price * $request['quantity'];

        Transaction::create([
            'quantity' => $request['quantity'],
            'type' => $request['type'],
            'group' => $request['group'],
            'expiration_date' => $request['expiration_date'],
            'description' => $request['description'],
            'client_id' => $request['client'],
            'product_id' => $request['product'],
            'total' => $total,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('transaction.index');
    }

    public function show(Request $request, Transaction $transaction)
    {
        return view('transaction.show', compact('transaction'));
    }

    public function edit(Request $request, Transaction $transaction)
    {
        $clients = Client::all();
        $products = Product::all();
        return view('transaction.edit', compact(['clients', 'products', 'transaction']));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'product' => 'required', 'integer', 'min:1',
            'quantity' => 'required', 'integer', 'min:1',
            'type' => 'required'
        ]);

        $product = Product::find($request['product']);

        if ($request['type'] == 'sale') $total = $product->selling_price * $request['quantity'];
        else $total = $product->buying_price * $request['quantity'];

        $transaction->update([
            'quantity' => $request['quantity'],
            'type' => $request['type'],
            'group' => $request['group'],
            'expiration_date' => $request['expiration_date'],
            'description' => $request['description'],
            'client_id' => $request['client'],
            'product_id' => $request['product'],
            'total' => $total,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('transaction.index');
    }

    public function destroy(Request $request, Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transaction.index');
    }
}
