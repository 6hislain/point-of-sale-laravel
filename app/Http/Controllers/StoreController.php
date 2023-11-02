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
        return 'all stores';
    }

    public function create()
    {
        return 'create store form';
    }

    public function store()
    {
        return 'save store';
    }

    public function show(Request $request, Store $store)
    {
        return 'one store';
    }

    public function edit(Request $request, Store $store)
    {
        return 'edit store form';
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
