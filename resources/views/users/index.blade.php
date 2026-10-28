@extends('layouts.app')

@section('title', 'Users')

@section('content')
<div class="page-heading"><div><p class="eyebrow">DIRECTORY</p><h1>Users</h1><p class="subtitle">Team members in your POS database.</p></div><span class="count-badge">{{ $users->count() }} records</span></div>
<section class="table-panel" aria-label="User records">
    <div class="panel-heading"><div><h2>User list</h2><p>Records retrieved from the users table.</p></div><span class="panel-symbol">♙</span></div>
    <div class="table-wrap"><table><thead><tr><th scope="col">Full name</th><th scope="col">Username</th></tr></thead><tbody>
        @forelse($users as $user)
            <tr><td><span class="person"><span class="avatar user-avatar">{{ strtoupper(substr($user->full_name, 0, 1)) }}</span><strong>{{ $user->full_name }}</strong></span></td><td><span class="username">{{ $user->username }}</span></td></tr>
        @empty
            <tr><td colspan="2" class="empty">No users yet. Run <code>php artisan db:seed</code> to add sample records.</td></tr>
        @endforelse
    </tbody></table></div>
</section>
@endsection
