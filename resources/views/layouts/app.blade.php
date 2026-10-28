<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard') · Ledger POS</title>
    <link rel="stylesheet" href="{{ asset('css/pos.css') }}">
</head>
<body>
<div class="app-shell">
    <aside class="sidebar">
        <a class="brand" href="{{ route('dashboard') }}" aria-label="Ledger POS home">
            <span class="brand-mark">L</span>
            <span><strong>Ledger</strong><small>POINT OF SALE</small></span>
        </a>
        <p class="nav-label">WORKSPACE</p>
        <nav aria-label="Main navigation">
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}" @if(request()->routeIs('dashboard')) aria-current="page" @endif><span class="nav-icon">▦</span> Overview</a>
            <a class="nav-link {{ request()->routeIs('customers.*') ? 'active' : '' }}" href="{{ route('customers.index') }}" @if(request()->routeIs('customers.*')) aria-current="page" @endif><span class="nav-icon">◉</span> Customers</a>
            <a class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}" href="{{ route('users.index') }}" @if(request()->routeIs('users.*')) aria-current="page" @endif><span class="nav-icon">♙</span> Users</a>
        </nav>
        <div class="sidebar-foot"><span class="status-dot"></span> Database connected</div>
    </aside>
    <div class="main-column">
        <header class="topbar"><span>Ledger POS <span class="topbar-divider">/</span> @yield('title', 'Overview')</span><span class="topbar-tag">TFA 6 · ELOQUENT</span></header>
        <main class="content">@yield('content')</main>
        <footer class="footer">Laravel POS database exercise <span>Customers · Users · Eloquent</span></footer>
    </div>
</div>
</body>
</html>
