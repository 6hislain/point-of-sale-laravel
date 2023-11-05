<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::paginate(20);
        return view('client.index', compact('clients'));
    }

    public function create()
    {
        $stores = Store::take(10)->get();
        return view('client.create', compact('stores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'contact' => ['required', 'min:5', 'max:50'],
            'store' => ['required']
        ]);

        Client::create([
            'name' => $request['name'],
            'store_id' => $request['store'],
            'contact' => $request['contact'],
            'description' => $request['description'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('client.index');
    }

    public function show(Request $request, Client $client)
    {
        return view('client.show', compact('client'));
    }

    public function edit(Request $request, Client $client)
    {
        $stores = Store::take(10)->get();
        return view('client.edit', compact(['client', 'stores']));
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'contact' => ['required', 'min:5', 'max:50'],
            'store' => ['required']
        ]);

        $client->update([
            'name' => $request['name'],
            'store_id' => $request['store'],
            'contact' => $request['contact'],
            'description' => $request['description'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('client.index');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index');
    }
}
