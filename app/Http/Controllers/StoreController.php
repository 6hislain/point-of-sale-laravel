<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('store.index');
    }

    public function create()
    {
        return view('store.create');
    }

    public function store()
    {
        return 'save store';
    }

    public function show(Request $request, Store $store)
    {
        return view('store.show');
    }

    public function edit(Request $request, Store $store)
    {
        return view('store.edit');
    }

    public function update(Request $request, Store $store)
    {
        return 'update store';
    }

    public function destroy(Request $request, Store $store)
    {
        return 'delete store';
    }
}
