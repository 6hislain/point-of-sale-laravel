@extends('layouts.dashboard')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Product</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <div class='d-flex justify-content-center align-items-center h-75'>
        <div class='text-center w-75'>
            <form action='{{ route('product.store') }}' method='post' enctype="multipart/form-data">
                <h2 class='mb-3'>Create product</h2>
                @include('components.message')
                <div class='row'>
                    <div class='col-md-8'>
                        <input class='form-control mb-3' name='name' placeholder='product name'
                            value='{{ old('name') }}' />
                    </div>
                    <div class='col-md-4'>
                        <select class='form-select mb-3' name='category'>
                            <option value=''>- select category -</option>
                            @foreach ($categories as $category)
                                <option value='{{ $category->id }}'>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class='col-md-4'>
                        <input class='form-control mb-3' name='buying_price' placeholder='buying price' type='number'
                            value='{{ old('buying_price') }}' />
                    </div>
                    <div class='col-md-4'>
                        <input class='form-control mb-3' name='selling_price' placeholder='selling price' type='number'
                            value='{{ old('selling_price') }}' />
                    </div>
                    <div class='col-md-4'>
                        <input class='form-control mb-3' name='supplier' placeholder='supplier name'
                            value='{{ old('supplier') }}' />
                    </div>
                    <div class='col-md-4'>
                        <input class='form-control mb-3' name='serial' placeholder='serial number'
                            value='{{ old('serial') }}' />
                    </div>
                    <div class="col-md-8">
                        <input class='form-control mb-3' name='image' type='file' />
                    </div>
                </div>
                <textarea id='editor' class='form-control' name='description' placeholder="write more details">
                    {{ old('description') }}
                </textarea>
                @csrf
                <div class='d-flex justify-content-between mt-3'>
                    <button type='submit' class='btn btn-primary rounded-pill w-10'>Submit</button>
                    <a href='{{ route('product.index') }}' class='btn btn-outline-primary rounded-pill w-10'>
                        All product
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
