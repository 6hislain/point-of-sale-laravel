@extends('layouts.default')
@section('content')
    <div class='d-flex justify-content-center align-items-center'>
        <div class='text-center w-30'>
            <form action='#' method='post' class='my-3'>
                <h2 class='mb-3'>Login</h2>
                @include('components.message')
                <input class='form-control mb-3' name='email' type='email' placeholder='my@email.com'
                    value='{{ old('email') }}' />
                <input class='form-control mb-3' name='password' type='password' placeholder="password"
                    value='{{ old('password') }}' />
                @csrf
                <button type='submit' class='btn btn-primary rounded-pill w-10'>Submit</button>
            </form>
        </div>
    </div>
@endsection
