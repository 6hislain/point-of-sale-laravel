@extends('layouts.dashboard')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <div class='d-flex justify-content-between'>
        <h2>All users</h2>
    </div>
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Role</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        {{-- <div class='btn-group'>
                            <a class='btn btn-sm btn-success' href='{{ route('user.show', $user->id) }}'>
                                <i class='bi bi-eye'></i>
                            </a>
                            <a class='btn btn-sm btn-info' href='{{ route('user.edit', $user->id) }}'>
                                <i class='bi bi-pencil'></i>
                            </a>
                        </div>
                        <form action='{{ route('user.destroy', $user->id) }}' method='post' class='d-inline'>
                            @csrf @method('delete')
                            <button class='btn btn-sm btn-warning'>
                                <i class='bi bi-trash'></i>
                            </button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
@endsection
