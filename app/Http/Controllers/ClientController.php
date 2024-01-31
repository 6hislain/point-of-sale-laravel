<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): View
    {
        $clients = Client::paginate(20);
        return view('client.index', compact('clients'));
    }

    public function create(): View
    {
        return view('client.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'contact' => ['required', 'min:5', 'max:50'],
        ]);

        Client::create([
            'name' => $request['name'],
            'contact' => $request['contact'],
            'description' => $request['description'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('client.index');
    }

    public function show(Request $request, Client $client): View
    {
        return view('client.show', compact('client'));
    }

    public function edit(Request $request, Client $client): View
    {
        return view('client.edit', compact('client'));
    }

    public function update(Request $request, Client $client): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'contact' => ['required', 'min:5', 'max:50'],
        ]);

        $client->update([
            'name' => $request['name'],
            'contact' => $request['contact'],
            'description' => $request['description'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('client.index');
    }

    public function destroy(Client $client): RedirectResponse
    {
        $client->delete();
        return redirect()->route('client.index');
    }
}
