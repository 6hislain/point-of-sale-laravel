<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
        ]);

        Category::create([
            'name' => $request['name'],
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
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
        ]);

        $category->update([
            'name' => $request['name'],
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
