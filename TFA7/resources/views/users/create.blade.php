@extends('layouts.app')

@section('title', 'Create User')

@section('content')

<div class="page-header">
    <h1>Create User</h1>
    <p>Add a new user account to your POS system.</p>
</div>

<div class="form-card">

    @if($errors->any())
        <div class="error-message">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Username</label>
            <input
                type="text"
                name="username"
                placeholder="Enter username"
                value="{{ old('username') }}"
                required
            >
        </div>

        <div class="form-group">
            <label>Full Name</label>
            <input
                type="text"
                name="full_name"
                placeholder="Enter full name"
                value="{{ old('full_name') }}"
                required
            >
        </div>

        <button type="submit">Save User</button>

        <a href="{{ route('users.index') }}" class="btn btn-outline">
            Cancel
        </a>

    </form>

</div>

@endsection