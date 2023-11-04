<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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

    public function store()
    {
        return 'save category';
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
        return 'update category';
    }

    public function destroy(Request $request, Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
