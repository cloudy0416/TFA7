<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
</head>
<body>

<h1>Customer Accounts</h1>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<a href="{{ route('customers.create') }}">Create Customer</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>

    @foreach($customers as $customer)
    <tr>
        <td>{{ $customer->id }}</td>
        <td>{{ $customer->full_name }}</td>
        <td>{{ $customer->email }}</td>
        <td>{{ $customer->phone }}</td>
        <td>
            <a href="{{ route('customers.edit', $customer->id) }}">Edit</a>
        </td>
    </tr>
    @endforeach
</table>

<br>
<a href="{{ route('users.index') }}">User Accounts</a>

</body>
</html>