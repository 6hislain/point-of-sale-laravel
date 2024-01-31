<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): View
    {
        $categories = Category::paginate(20);
        return view('category.index', compact('categories'));
    }

    public function create(): View
    {
        return view('category.create');
    }

    public function store(Request $request): RedirectResponse
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

    public function show(Request $request, Category $category): View
    {
        return view('category.show', compact('category'));
    }

    public function edit(Request $request, Category $category): View
    {
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, Category $category): RedirectResponse
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

    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
