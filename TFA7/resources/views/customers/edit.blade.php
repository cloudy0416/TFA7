@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')

<div class="page-header">
    <h1>Edit Customer</h1>
    <p>Update the customer's information.</p>
</div>

<div class="form-card">

    @if($errors->any())
        <div class="error-message">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('customers.update', $customer->id) }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Full Name</label>
            <input
                type="text"
                name="full_name"
                value="{{ old('full_name', $customer->full_name) }}"
                required
            >
        </div>

        <div class="form-group">
            <label>Email Address</label>
            <input
                type="email"
                name="email"
                value="{{ old('email', $customer->email) }}"
                required
            >
        </div>

        <div class="form-group">
            <label>Phone Number</label>
            <input
                type="text"
                name="phone"
                value="{{ old('phone', $customer->phone) }}"
            >
        </div>

        <button type="submit">Update Customer</button>

        <a href="{{ route('customers.index') }}" class="btn btn-outline">
            Cancel
        </a>

    </form>

</div>

@endsection