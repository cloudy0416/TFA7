<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>

<h1>Create User</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        <p style="color: red;">{{ $error }}</p>
    @endforeach
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <label>Username:</label>
    <input type="text" name="username" value="{{ old('username') }}">
    <br><br>

    <label>Full Name:</label>
    <input type="text" name="full_name" value="{{ old('full_name') }}">
    <br><br>

    <button type="submit">Save User</button>
</form>

<br>
<a href="{{ route('users.index') }}">Back</a>

</body>
</html>