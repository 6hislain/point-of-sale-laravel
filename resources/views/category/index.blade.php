@extends('layouts.dashboard')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Category</li>
        </ol>
    </nav>
    <div class='d-flex justify-content-between'>
        <h2>All categories</h2>
        <span>
            <a class='btn btn-outline-primary rounded-pill' href='{{ route('category.create') }}'>
                <i class='bi bi-plus'></i> Add category
            </a>
        </span>
    </div>
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <div class='btn-group'>
                            <a class='btn btn-sm btn-success' href='{{ route('category.show', $category->id) }}'>
                                <i class='bi bi-eye'></i>
                            </a>
                            <a class='btn btn-sm btn-info' href='{{ route('category.edit', $category->id) }}'>
                                <i class='bi bi-pencil'></i>
                            </a>
                        </div>
                        <form action='{{ route('category.destroy', $category->id) }}' method='post' class='d-inline'>
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
    {{ $categories->links() }}
@endsection
