<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'category' => ['required', 'integer', 'min:1'],
            'buying_price' => ['required_with:selling_price', 'min:1'],
            'selling_price' => ['required_with:buying_price', 'gt:buying_price'],
            'supplier' => ['required', 'min:3', 'max:50'],
        ]);

        Product::create([
            'name' => $request['name'],
            'category_id' => $request['category'],
            'buying_price' => $request['buying_price'],
            'selling_price' => $request['selling_price'],
            'supplier' => $request['supplier'],
            'serial' => $request['serial'],
            'description' => $request['description'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('product.index');
    }

    public function show(Request $request, Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function edit(Request $request, Product $product)
    {
        $categories = Category::all();
        return view('product.edit', compact(['product', 'categories']));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'category' => ['required', 'integer'],
            'buying_price' => ['required_with:selling_price', 'min:1'],
            'selling_price' => ['required_with:buying_price', 'gt:buying_price'],
            'supplier' => ['required', 'min:3', 'max:50'],
        ]);

        $product->update([
            'name' => $request['name'],
            'category_id' => $request['category'],
            'buying_price' => $request['buying_price'],
            'selling_price' => $request['selling_price'],
            'supplier' => $request['supplier'],
            'serial' => $request['serial'],
            'description' => $request['description'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
