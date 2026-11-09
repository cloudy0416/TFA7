@extends('layouts.app')

@section('title', 'Home - Laravel POS')

@section('content')

<div class="hero">
    <div class="hero-content">
        <p class="welcome-text">WELCOME TO</p>

        <h1>Point of Sale System</h1>

        <p class="hero-description">
            Manage your customer and user accounts in one simple
            and organized platform.
        </p>

        <div class="hero-buttons">
            <a href="{{ route('customers.index') }}" class="btn btn-primary">
                Manage Customers
            </a>

            <a href="{{ route('users.index') }}" class="btn btn-outline">
                Manage Users
            </a>
        </div>
    </div>
</div>

<div class="section-heading">
    <h2>System Features</h2>
    <p>Explore the available features of the POS application.</p>
</div>

<div class="feature-grid">

    <div class="feature-card">
        <div class="feature-icon">01</div>
        <h3>Customer Management</h3>
        <p>
            Create, view, and update customer information
            including names, email addresses, and phone numbers.
        </p>
        <a href="{{ route('customers.index') }}">View Customers →</a>
    </div>

    <div class="feature-card">
        <div class="feature-icon">02</div>
        <h3>User Management</h3>
        <p>
            Create and update user accounts while managing
            usernames, full names, and profile pictures.
        </p>
        <a href="{{ route('users.index') }}">View Users →</a>
    </div>

    <div class="feature-card">
        <div class="feature-icon">03</div>
        <h3>Profile Pictures</h3>
        <p>
            Upload and display prepared profile images
            for user accounts.
        </p>
        <a href="{{ route('users.index') }}">Manage Profiles →</a>
    </div>

</div>

@endsection