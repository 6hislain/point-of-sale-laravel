@extends('layouts.dashboard')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('store.index') }}">Store</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <div class='d-flex justify-content-between'>
        <h2>All stores</h2>
        <span><a class='btn btn-primary rounded-pill' href='{{ route('store.create') }}'>Add Store</a></span>
    </div>
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">store name</th>
                <th scope="col">contact</th>
                <th scope="col">description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stores as $store)
                <tr>
                    <th scope="row">{{ $store->id }}</th>
                    <td>{{ $store->name }}</td>
                    <td>{{ $store->contact }}</td>
                    <td>{{ $store->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $stores->links() }}
@endsection
