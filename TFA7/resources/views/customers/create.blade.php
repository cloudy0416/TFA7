@extends('layouts.app')

@section('title', 'Create Customer')

@section('content')

<div class="page-header">
    <h1>Create Customer</h1>
    <p>Add a new customer to your POS system.</p>
</div>

<div class="form-card">

    @if($errors->any())
        <div class="error-message">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf

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

        <div class="form-group">
            <label>Email Address</label>
            <input
                type="email"
                name="email"
                placeholder="Enter email address"
                value="{{ old('email') }}"
                required
            >
        </div>

        <div class="form-group">
            <label>Phone Number</label>
            <input
                type="text"
                name="phone"
                placeholder="Enter phone number"
                value="{{ old('phone') }}"
            >
        </div>

        <button type="submit">Save Customer</button>

        <a href="{{ route('customers.index') }}" class="btn btn-outline">
            Cancel
        </a>

    </form>

</div>

@endsection