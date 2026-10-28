@extends('layouts.app')

@section('title', 'Overview')

@section('content')
<div class="page-heading">
    <div><p class="eyebrow">YOUR WORKSPACE</p><h1>Overview</h1><p class="subtitle">Your point of sale records, backed by the database.</p></div>
    <span class="page-badge"><span class="status-dot"></span> Live data</span>
</div>

<div class="stat-grid">
    <a class="stat-card" href="{{ route('customers.index') }}">
        <span class="stat-icon customers-icon">◉</span>
        <span class="stat-label">TOTAL CUSTOMERS</span>
        <strong>{{ number_format($customerCount) }}</strong>
        <span class="stat-link">View customer directory <span aria-hidden="true">→</span></span>
    </a>
    <a class="stat-card" href="{{ route('users.index') }}">
        <span class="stat-icon users-icon">♙</span>
        <span class="stat-label">TEAM USERS</span>
        <strong>{{ number_format($userCount) }}</strong>
        <span class="stat-link">View user directory <span aria-hidden="true">→</span></span>
    </a>
</div>

<section class="info-panel">
    <p class="eyebrow">DATA LAYER</p>
    <h2>From arrays to Eloquent</h2>
    <p>Customer and user records now live in database tables created by Laravel migrations. The directories load their records through Eloquent models, and the sample data comes from seeders.</p>
    <div class="info-links"><a href="{{ route('customers.index') }}">Browse customers →</a><a href="{{ route('users.index') }}">Browse users →</a></div>
</section>
@endsection
