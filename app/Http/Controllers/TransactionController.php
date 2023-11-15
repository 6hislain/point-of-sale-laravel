<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

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
        return view('transaction.create');
    }

    public function store()
    {
        return 'save transaction';
    }

    public function show(Request $request, Transaction $transaction)
    {
        return view('transaction.show', compact('transaction'));
    }

    public function edit(Request $request, Transaction $transaction)
    {
        return view('transaction.edit', compact('transaction'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        return 'update transaction';
    }

    public function destroy(Request $request, Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transaction.index');
    }
}
