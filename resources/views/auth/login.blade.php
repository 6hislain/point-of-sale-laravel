@extends('layouts.default')
@section('content')
    <div class='d-flex justify-content-center align-items-center h-57'>
        <div class='text-center w-20'>
            <form action='{{ _('login') }}' method='post' class='my-3'>
                <h2 class='mb-3'>Login</h2>
                <input class='form-control mb-3' name='email' type='email' placeholder='my@email.com' />
                <input class='form-control mb-3' name='password' type='password' placeholder="password" />
                @csrf
                <button type='submit' class='btn btn-primary rounded-pill w-10'>Submit</button>
            </form>
        </div>
    </div>
@endsection
