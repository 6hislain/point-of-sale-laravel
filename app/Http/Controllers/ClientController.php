<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

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
        return view('client.create');
    }

    public function store()
    {
        return 'save client';
    }

    public function show(Request $request, Client $client)
    {
        return view('client.show', compact('client'));
    }

    public function edit(Request $request, Client $client)
    {
        return view('client.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        return 'update client';
    }

    public function destroy(Request $request, Client $client)
    {
        $client->delete();
        return redirect()->route('client.index');
    }
}
