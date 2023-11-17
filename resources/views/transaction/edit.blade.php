@extends('layouts.dashboard')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('transaction.index') }}">Transaction</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <div class='d-flex justify-content-center align-items-center h-75'>
        <div class='text-center w-75'>
            <form action='{{ route('transaction.update', $transaction->id) }}' method='post' enctype="multipart/form-data">
                <h2 class='mb-3'>Edit transaction</h2>
                @include('components.message')
                <div class='row'>
                    <div class='col-md-4'>
                        <select class='form-select mb-3' name='product'>
                            <option value='{{ $transaction->product_id }}'>{{ $transaction->product->name }}</option>
                            @foreach ($products as $product)
                                <option value='{{ $product->id }}'>{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class='col-md-4'>
                        <input class='form-control mb-3' name='quantity' value='{{ $transaction->quantity }}'
                            type='number' />
                    </div>
                    <div class='col-md-4'>
                        <select class='form-select mb-3' name='client'>
                            <option value='{{ $transaction->client_id }}'>
                                {{ $transaction->client->name ?? '- select client -' }}</option>
                            @foreach ($clients as $client)
                                <option value='{{ $client->id }}'>{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class='col-md-5'>
                        <select class='form-select mb-3' name='type'>
                            <option value='{{ $transaction->type }}'>{{ $transaction->type }}</option>
                            <option value='sale'>sale</option>
                            <option value='purchase'>purchase</option>
                            <option value='expired'>expired</option>
                        </select>
                    </div>
                    <div class='col-md-5'>
                        <div class='input-group mb-3'>
                            <span class="input-group-text">expiry date</span>
                            <input class='form-control' name='expiration_date' type='date'
                                value='{{ $transaction->expiration_date }}' />
                        </div>
                    </div>
                    <div class='col-md-2'>
                        <input class='form-control mb-3' name='group' placeholder='group id' type='number'
                            value='{{ $transaction->group }}' />
                    </div>
                </div>
                <textarea id='editor' class='form-control' name='description' placeholder="write more details">{{ $transaction->description }}</textarea>
                @csrf @method('put')
                <div class='d-flex justify-content-between mt-3'>
                    <button type='submit' class='btn btn-primary rounded-pill w-10'>Submit</button>
                    <a href='{{ route('transaction.index') }}' class='btn btn-outline-primary rounded-pill w-10'>
                        All transaction
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="/js/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector("#editor"));
    </script>
@endsection
