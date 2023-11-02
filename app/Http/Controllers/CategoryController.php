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
        return 'all categories';
    }

    public function create()
    {
        return 'create category form';
    }

    public function store()
    {
        return 'save category';
    }

    public function show(Request $request, Category $category)
    {
        return 'one category';
    }

    public function edit(Request $request, Category $category)
    {
        return 'edit category form';
    }

    public function update(Request $request, Category $category)
    {
        return 'update category';
    }

    public function destroy(Request $request, Category $category)
    {
        return 'delete category';
    }
}
