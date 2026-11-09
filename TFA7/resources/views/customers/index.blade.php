@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')

<div class="page-header">
    <h1>Customer Accounts</h1>
    <p>Manage and organize your customer information.</p>
</div>

<div class="table-card">

    <a href="{{ route('customers.create') }}" class="btn btn-primary">
        + Create Customer
    </a>

    <br><br>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->full_name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>
                        <a href="{{ route('customers.edit', $customer->id) }}"
                           class="submit-btn">
                            Edit
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center;">
                        No customer records found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

@endsection