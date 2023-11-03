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
            <form action='{{ route('store.store') }}' method='post' enctype="multipart/form-data">
                <h2 class='mb-3'>Create Store</h2>
                @include('components.message')
                <input class='form-control mb-3' name='name' placeholder='store name' />
                <input class='form-control mb-3' name='contact' placeholder='email or telephone' />
                <input class='form-control mb-3' name='image' type='file' />
                <textarea id='editor' class='form-control' name='description' placeholder="write more details"></textarea>
                @csrf
                <button type='submit' class='btn btn-primary rounded-pill mt-3 w-10'>Submit</button>
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
