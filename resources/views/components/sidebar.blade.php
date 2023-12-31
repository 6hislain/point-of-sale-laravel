<div class='sidebar bg-body min-vh-100 d-none d-sm-block' data-bs-theme="dark">
    <div class='d-flex flex-column justify-content-between h-100'>
        <div>
            <div class='text-center'>
                <img class='m-3 rounded-pill' alt='logo' src='/img/cashier.png' height='100' width='100' />
            </div>
            <div class="list-group list-group-flush">
                <a href="{{ route('home') }}" class="list-group-item list-group-item-action">
                    <i class='bi bi-house me-2'></i> Home
                </a>
                <a href="{{ route('dashboard') }}"
                    class="list-group-item list-group-item-action @if (Route::currentRouteName() == 'dashboard') active @endif">
                    <i class='bi bi-speedometer2 me-2'></i> Dashboard
                </a>
                <a href="{{ route('category.index') }}"
                    class="list-group-item list-group-item-action @if (str_contains(Route::currentRouteName(), 'category')) active @endif">
                    <i class='bi bi-collection me-2'></i> Category
                </a>
                <a href="{{ route('client.index') }}"
                    class="list-group-item list-group-item-action @if (str_contains(Route::currentRouteName(), 'client')) active @endif">
                    <i class='bi bi-person-check me-2'></i> Client
                </a>
                <a href="{{ route('product.index') }}"
                    class="list-group-item list-group-item-action @if (str_contains(Route::currentRouteName(), 'product')) active @endif">
                    <i class='bi bi-box me-2'></i> Product
                </a>
                <a href="{{ route('transaction.index') }}"
                    class="list-group-item list-group-item-action @if (str_contains(Route::currentRouteName(), 'transaction')) active @endif">
                    <i class='bi bi-arrow-down-up me-2'></i> Transaction
                </a>
                <a href="{{ route('user.index') }}"
                    class="list-group-item list-group-item-action @if (str_contains(Route::currentRouteName(), 'user')) active @endif">
                    <i class='bi bi-people me-2'></i> User
                </a>
                <a href="{{ route('category.index') }}" class="list-group-item list-group-item-action">
                    <i class='bi bi-person-circle me-2'></i> Profile
                </a>
                <a href="{{ route('logout') }}" class="list-group-item list-group-item-action">
                    <i class='bi bi-box-arrow-left me-2'></i> Logout
                </a>
            </div>
        </div>
        <div class='d-flex flex-row'>
            <img class='m-3 rounded-pill' alt='{{ Auth::user()->name }}' src='/img/user.png' height='50'
                width='50' />
            <div class='text-white my-auto'>
                <b class='d-block'>{{ Auth::user()->name }}</b>
                <small class='d-block'>{{ Auth::user()->role }}</small>
            </div>
        </div>
    </div>
</div>
