<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title'){{ config('app.name', 'Point of Sale') }}@show</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-icons.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    @yield('styles')
  </head>
  <body>
    @include('components.navbar')
    <main class='container'>@yield('content')</main>
    @include('components.footer')
    <script src="/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>