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
        $products = Product::paginate(20);
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store()
    {
        return 'save product';
    }

    public function show(Request $request, Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function edit(Request $request, Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        return 'update product';
    }

    public function destroy(Request $request, Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
