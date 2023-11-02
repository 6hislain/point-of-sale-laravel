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
        return 'all transactions';
    }

    public function create()
    {
        return 'create transaction form';
    }

    public function store()
    {
        return 'save transaction';
    }

    public function show(Request $request, Transaction $transaction)
    {
        return 'one transaction';
    }

    public function edit(Request $request, Transaction $transaction)
    {
        return 'edit transaction form';
    }

    public function update(Request $request, Transaction $transaction)
    {
        return 'update transaction';
    }

    public function destroy(Request $request, Transaction $transaction)
    {
        return 'delete transaction';
    }
}
