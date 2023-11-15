@extends('layouts.dashboard')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('client.index') }}">Client</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <div class='d-flex justify-content-center align-items-center h-75'>
        <div class='text-center w-30'>
            <form action='{{ route('client.update', $client->id) }}' method='post' enctype="multipart/form-data">
                <h2 class='mb-3'>Edit client</h2>
                @include('components.message')
                <input class='form-control mb-3' name='name' value='{{ $client->name }}' />
                <input class='form-control mb-3' name='contact' value='{{ $client->contact }}' />
                <input class='form-control mb-3' name='image' type='file' />
                <textarea id='editor' class='form-control' name='description' placeholder="write more details">
                    {{ $client->description }}
                </textarea>
                @csrf @method('put')
                <div class='d-flex justify-content-between mt-3'>
                    <button type='submit' class='btn btn-primary rounded-pill w-10'>Submit</button>
                    <a href='{{ route('client.index') }}' class='btn btn-outline-primary rounded-pill w-10'>
                        All client
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
