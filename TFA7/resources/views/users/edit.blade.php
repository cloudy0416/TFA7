<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h1>Edit User</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        <p style="color: red;">{{ $error }}</p>
    @endforeach
@endif

<form action="{{ route('users.update', $user->id) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <label>Username:</label>
    <input type="text" name="username"
        value="{{ old('username', $user->username) }}">
    <br><br>

    <label>Full Name:</label>
    <input type="text" name="full_name"
        value="{{ old('full_name', $user->full_name) }}">
    <br><br>

    <label>Current Avatar:</label>
    <br>

    @if($user->avatar)
        <img src="{{ asset('storage/' . $user->avatar) }}"
             width="120" height="120"
             style="object-fit: cover; border-radius: 50%;">
    @else
        <img src="{{ asset('images/avatar-placeholder.png') }}"
             width="120" height="120">
    @endif

    <br><br>

    <label>Upload New Avatar:</label>
    <input type="file" name="avatar" accept="image/*">

    <p>Maximum file size: 2MB.</p>

    <button type="submit">Update User</button>
</form>

<br>
<a href="{{ route('users.index') }}">Back</a>

</body>
</html>