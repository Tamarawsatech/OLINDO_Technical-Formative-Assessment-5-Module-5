@extends('layouts.app')

@section('title', 'User Accounts | Laravel POS')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <p class="text-primary text-uppercase fw-semibold small mb-1">Account listing</p>
            <h1 class="display-6 fw-bold mb-1">User Accounts</h1>
            <p class="text-secondary mb-0">Sample POS team member records.</p>
        </div>
        <span class="badge text-bg-primary rounded-pill px-3 py-2">{{ count($users) }} users</span>
    </div>

    <div class="card page-card">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Full name</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user['id'] }}</td>
                            <td class="fw-semibold">{{ $user['username'] }}</td>
                            <td>{{ $user['full_name'] }}</td>
                            <td>{{ $user['email'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
