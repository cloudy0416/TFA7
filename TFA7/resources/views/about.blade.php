@extends('layouts.app')

@section('title', 'About - Laravel POS')

@section('content')

<div class="page-header">
    <h1>About Our System</h1>
    <p>Learn more about our Laravel Point of Sale application.</p>
</div>

<div class="about-card">

    <h2>Laravel Point of Sale System</h2>

    <p>
        The Laravel POS System is a web-based application
        designed to manage customer and user account information.
        It provides a simple interface for creating, viewing,
        and updating records.
    </p>

    <p>
        The application uses Laravel as its backend framework
        and MySQL as its database. It also includes form validation
        and profile picture uploading for user accounts.
    </p>

    <h3>System Objectives</h3>

    <ul>
        <li>Organize customer information.</li>
        <li>Create and manage user accounts.</li>
        <li>Validate submitted information.</li>
        <li>Allow users to update their account details.</li>
        <li>Upload and display user profile pictures.</li>
    </ul>

    <h3>Technologies Used</h3>

    <div class="tech-list">
        <span>Laravel</span>
        <span>PHP</span>
        <span>MySQL</span>
        <span>HTML</span>
        <span>CSS</span>
        <span>Intervention Image</span>
    </div>

</div>

@endsection