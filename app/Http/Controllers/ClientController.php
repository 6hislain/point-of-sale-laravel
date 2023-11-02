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
        return 'all clients';
    }

    public function create()
    {
        return 'create client form';
    }

    public function store()
    {
        return 'save client';
    }

    public function show(Request $request, Client $client)
    {
        return 'one client';
    }

    public function edit(Request $request, Client $client)
    {
        return 'edit client form';
    }

    public function update(Request $request, Client $client)
    {
        return 'update client';
    }

    public function destroy(Request $request, Client $client)
    {
        return 'delete client';
    }
}
