@extends('layouts.default')
@section('content')
<div class='d-flex justify-content-center align-items-center h-57'>
    <div class='text-center w-20'>
        <form action='{{ _('register') }}' method='post'>
            <h2 class='mb-3'>Register</h2>
            <input class='form-control mb-3' name='name' placeholder='full names'/>
            <input class='form-control mb-3' name='email' type='email' placeholder='my@email.com'/>
            <input class='form-control mb-3' name='password' type='password' placeholder="password"/>
            <input class='form-control mb-3' name='password_confirmation' type='password' placeholder="confirm password"/>
            @csrf
            <button type='submit' class='btn btn-primary w-10'>Submit</button>
        </form>
    </div>
</div>
@endsection