@extends('layouts.dashboard')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('store.index') }}">Store</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <div class='d-flex justify-content-center align-items-center h-75'>
        <div class='text-center w-30'>
            <form action='{{ _('store.store') }}' method='post'>
                <h2 class='mb-3'>Create Store</h2>
                <input class='form-control mb-3' name='name' placeholder='full names' />
                <input class='form-control mb-3' name='email' type='email' placeholder='my@email.com' />
                <input class='form-control mb-3' name='password' type='password' placeholder="password" />
                <input class='form-control mb-3' name='password_confirmation' type='password'
                    placeholder="confirm password" />
                @csrf
                <button type='submit' class='btn btn-primary rounded-pill w-10'>Submit</button>
            </form>
        </div>
    </div>
@endsection
