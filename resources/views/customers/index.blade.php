@extends('layouts.app')

@section('title', 'Customers')

@section('content')
<div class="page-heading"><div><p class="eyebrow">DIRECTORY</p><h1>Customers</h1><p class="subtitle">Contact information for your POS customers.</p></div><span class="count-badge">{{ $customers->count() }} records</span></div>
<section class="table-panel" aria-label="Customer records">
    <div class="panel-heading"><div><h2>Customer list</h2><p>Records retrieved from the customers table.</p></div><span class="panel-symbol">◉</span></div>
    <div class="table-wrap"><table><thead><tr><th scope="col">Customer</th><th scope="col">Email address</th><th scope="col">Phone number</th></tr></thead><tbody>
        @forelse($customers as $customer)
            <tr><td><span class="person"><span class="avatar">{{ strtoupper(substr($customer->full_name, 0, 1)) }}</span><strong>{{ $customer->full_name }}</strong></span></td><td><a href="mailto:{{ $customer->email }}">{{ $customer->email }}</a></td><td>{{ $customer->phone }}</td></tr>
        @empty
            <tr><td colspan="3" class="empty">No customers yet. Run <code>php artisan db:seed</code> to add sample records.</td></tr>
        @endforelse
    </tbody></table></div>
</section>
@endsection
