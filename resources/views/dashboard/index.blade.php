@extends('layouts.dashboard')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <div class='d-flex flex-row'>
        <img class='my-auto me-3 rounded-pill' alt='' src='https://placehold.co/75x75png' height='75'
            width='75' />
        <div>
            <h3 class='fw-normal'>Welcome, {{ Auth::user()->name }}</h3>
            <p class="text-muted mb-0">These are your analytics stats for today {{ today()->format('M d, Y') }}</p>
        </div>
    </div>
    <hr>
    <div class='row'>
        <div class='col-md-3'>
            <div class='card card-body border-0 bg-success text-white shadow-sm'>
                <h5 class='fw-normal'>TRANSACTIONS</h5>
                <h1>{{ $transactions }} <i class="bi bi-arrow-down-up float-end"></i></h1>
                <p class="text-white mb-0">12% from last month</p>
            </div>
        </div>
        <div class='col-md-3'>
            <div class='card card-body border-0 bg-info shadow-sm'>
                <h5 class='fw-normal'>PRODUCTS</h5>
                <h1>{{ $products }} <i class="bi bi-box float-end"></i></h1>
                <p class="text-muted mb-0">12% from last month</p>
            </div>
        </div>
        <div class='col-md-3'>
            <div class='card card-body border-0 bg-secondary text-white shadow-sm'>
                <h5 class='fw-normal'>CATEGORIES</h5>
                <h1>{{ $categories }} <i class="bi bi-collection float-end"></i></h1>
                <p class="text-white mb-0">12% from last month</p>
            </div>
        </div>
        <div class='col-md-3'>
            <div class='card card-body border-0 bg-warning shadow-sm'>
                <h5 class='fw-normal'>CLIENTS</h5>
                <h1>{{ $clients }} <i class="bi bi-person-check float-end"></i></h1>
                <p class="text-muted mb-0">12% from last month</p>
            </div>
        </div>
    </div>
@endsection
