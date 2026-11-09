@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')

<div class="page-header">
    <h1>User Accounts</h1>
    <p>Manage user information and profile pictures.</p>
</div>

<div class="table-card">

    <a href="{{ route('users.create') }}" class="btn btn-primary">
        + Create User
    </a>

    <br><br>

    <table>
        <thead>
            <tr>
                <th>Avatar</th>
                <th>ID</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse($users as $user)
                <tr>
                    <td>
                        @if($user->avatar && \Illuminate\Support\Facades\Storage::disk('public')->exists($user->avatar))
                            <img
                                src="{{ asset('storage/' . $user->avatar) }}"
                                alt="User Avatar"
                                width="55"
                                height="55"
                                style="object-fit: cover; border-radius: 50%;"
                            >
                        @else
                            <img
                                src="{{ asset('images/avatar-placeholder.png') }}"
                                alt="Default Avatar"
                                width="55"
                                height="55"
                                style="object-fit: cover; border-radius: 50%;"
                            >
                        @endif
                    </td>

                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->full_name }}</td>

                    <td>
                        <a href="{{ route('users.edit', $user->id) }}"
                           class="submit-btn">
                            Edit
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center;">
                        No user records found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

@endsection