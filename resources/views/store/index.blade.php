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
                <th scope="col">Store Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stores as $store)
                <tr>
                    <th scope="row">{{ $store->id }}</th>
                    <td>{{ $store->name }}</td>
                    <td>{{ $store->contact }}</td>
                    <td>{{ $store->description }}</td>
                    <td>
                        <div class='btn-group'>
                            <a class='btn btn-sm btn-success' href='{{ route('store.show', $store->id) }}'>
                                <i class='bi bi-eye'></i>
                            </a>
                            <a class='btn btn-sm btn-info' href='{{ route('store.edit', $store->id) }}'>
                                <i class='bi bi-pencil'></i>
                            </a>
                        </div>
                        <form action='{{ route('store.destroy', $store->id) }}' method='post' class='d-inline'>
                            @csrf @method('delete')
                            <button class='btn btn-sm btn-warning'>
                                <i class='bi bi-trash'></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $stores->links() }}
@endsection
