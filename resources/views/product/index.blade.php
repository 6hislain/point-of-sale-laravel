@extends('layouts.dashboard')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
        </ol>
    </nav>
    <div class='d-flex justify-content-between'>
        <h2>All products</h2>
        <span>
            <a class='btn btn-outline-primary rounded-pill' href='{{ route('product.create') }}'>
                <i class='bi bi-plus'></i> Add product
            </a>
        </span>
    </div>
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Buying Price</th>
                <th scope="col">Selling Price</th>
                <th scope="col">Category</th>
                <th scope="col">Supplier</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->buying_price }}</td>
                    <td>{{ $product->selling_price }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->supplier }}</td>
                    <td>
                        <div class='btn-group'>
                            <a class='btn btn-sm btn-success' href='{{ route('product.show', $product->id) }}'>
                                <i class='bi bi-eye'></i>
                            </a>
                            <a class='btn btn-sm btn-info' href='{{ route('product.edit', $product->id) }}'>
                                <i class='bi bi-pencil'></i>
                            </a>
                        </div>
                        <form action='{{ route('product.destroy', $product->id) }}' method='post' class='d-inline'>
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
    {{ $products->links() }}
@endsection
