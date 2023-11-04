<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $stores = Store::paginate(20);
        return view('store.index', compact('stores'));
    }

    public function create()
    {
        return view('store.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'contact' => ['required', 'min:5', 'max:50']
        ]);

        Store::create([
            'name' => $request['name'],
            'contact' => $request['contact'],
            'description' => $request['description'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('store.index');
    }

    public function show(Request $request, Store $store)
    {
        return view('store.show', compact('store'));
    }

    public function edit(Request $request, Store $store)
    {
        return view('store.edit', compact('store'));
    }

    public function update(Request $request, Store $store)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'contact' => ['required', 'min:5', 'max:50']
        ]);

        $store->update([
            'name' => $request['name'],
            'contact' => $request['contact'],
            'description' => $request['description'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('store.index');
    }

    public function destroy(Request $request, Store $store)
    {
        $store->delete();
        return redirect()->route('store.index');
    }
}
