<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title'){{ config('app.name', 'Point of Sale') }}@show
    </title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-icons.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <main class='d-flex flex-row'>
        @include('components.sidebar')
        <div class='container w-75 my-3'>@yield('content')</div>
    </main>
    <script src="/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>

</html>
