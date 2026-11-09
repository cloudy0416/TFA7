@extends('layouts.app')

@section('title', 'Edit User')

@section('content')

<div class="page-header">
    <h1>Edit User</h1>
    <p>Update user information and profile picture.</p>
</div>

<div class="form-card">

    @if($errors->any())
        <div class="error-message">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Username</label>
            <input
                type="text"
                name="username"
                value="{{ old('username', $user->username) }}"
                required
            >
        </div>

        <div class="form-group">
            <label>Full Name</label>
            <input
                type="text"
                name="full_name"
                value="{{ old('full_name', $user->full_name) }}"
                required
            >
        </div>

        <div class="form-group">
            <label>Current Profile Picture</label>
            <br><br>

            @if($user->avatar && \Illuminate\Support\Facades\Storage::disk('public')->exists($user->avatar))
                <img
                    src="{{ asset('storage/' . $user->avatar) }}"
                    alt="Current Avatar"
                    width="120"
                    height="120"
                    style="object-fit: cover; border-radius: 50%;"
                >
            @else
                <img
                    src="{{ asset('images/avatar-placeholder.png') }}"
                    alt="Default Avatar"
                    width="120"
                    height="120"
                    style="object-fit: cover; border-radius: 50%;"
                >
            @endif
        </div>

        <div class="form-group">
            <label>Upload New Profile Picture</label>
            <input
                type="file"
                name="avatar"
                accept="image/jpeg,image/png,image/webp"
            >

            <small>Accepted formats: JPG, JPEG, PNG, WEBP. Maximum size: 2MB.</small>
        </div>

        <button type="submit">Update User</button>

        <a href="{{ route('users.index') }}" class="btn btn-outline">
            Cancel
        </a>

    </form>

</div>

@endsection