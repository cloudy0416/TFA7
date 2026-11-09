<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>

<h1>User Accounts</h1>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<a href="{{ route('users.create') }}">Create User</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>Avatar</th>
        <th>ID</th>
        <th>Username</th>
        <th>Full Name</th>
        <th>Action</th>
    </tr>

    @foreach($users as $user)
    <tr>
        <td>
            @if($user->avatar)
                <img src="{{ asset('storage/' . $user->avatar) }}"
                     width="60" height="60"
                     style="object-fit: cover; border-radius: 50%;">
            @else
                <img src="{{ asset('images/avatar-placeholder.png') }}"
                     width="60" height="60"
                     style="object-fit: cover; border-radius: 50%;">
            @endif
        </td>

        <td>{{ $user->id }}</td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->full_name }}</td>

        <td>
            <a href="{{ route('users.edit', $user->id) }}">Edit</a>
        </td>
    </tr>
    @endforeach
</table>

<br>
<a href="{{ route('customers.index') }}">Customer Accounts</a>

</body>
</html>