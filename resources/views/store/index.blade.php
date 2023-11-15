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
        <span>
            <a class='btn btn-outline-primary rounded-pill' href='{{ route('store.create') }}'>
                <i class='bi bi-plus'></i> Add store
            </a>
        </span>
    </div>
    <div class="row">
        @foreach ($stores as $store)
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm">
                    <img src="https://placehold.co/300x200png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $store->name }}</h5>
                        <div class='card-text'>{!! $store->description !!}</div>
                        <div class='float-end'>
                            <div class='btn-group'>
                                <a class='btn btn-sm btn-success' href='{{ route('store.show', $store->id) }}'>
                                    View
                                </a>
                                <a class='btn btn-sm btn-info' href='{{ route('store.edit', $store->id) }}'>
                                    Edit
                                </a>
                            </div>
                            <form action='{{ route('store.destroy', $store->id) }}' method='post' class='d-inline'>
                                @csrf @method('delete')
                                <button class='btn btn-sm btn-warning'>
                                    <i class='bi bi-trash'></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $stores->links() }}
@endsection
