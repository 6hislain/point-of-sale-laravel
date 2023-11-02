<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return 'all products';
    }

    public function create()
    {
        return 'create product form';
    }

    public function store()
    {
        return 'save product';
    }

    public function show(Request $request, Product $product)
    {
        return 'one product';
    }

    public function edit(Request $request, Product $product)
    {
        return 'edit product form';
    }

    public function update(Request $request, Product $product)
    {
        return 'update product';
    }

    public function destroy(Request $request, Product $product)
    {
        return 'delete product';
    }
}
