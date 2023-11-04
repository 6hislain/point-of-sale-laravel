<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::paginate(20);
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        $stores = Store::take(10)->get();
        return view('category.create', compact('stores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'store' => ['required']
        ]);

        Category::create([
            'name' => $request['name'],
            'store_id' => $request['store'],
            'description' => $request['description'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('category.index');
    }

    public function show(Request $request, Category $category)
    {
        return view('category.show', compact('category'));
    }

    public function edit(Request $request, Category $category)
    {
        $stores = Store::take(10)->get();
        return view('category.edit', compact(['category', 'stores']));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'store' => ['required']
        ]);

        $category->update([
            'name' => $request['name'],
            'store_id' => $request['store'],
            'description' => $request['description'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('category.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
