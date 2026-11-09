<!DOCTYPE html>
<html>
<head>
    <title>Create Customer</title>
</head>
<body>

<h1>Create Customer</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        <p style="color: red;">{{ $error }}</p>
    @endforeach
@endif

<form action="{{ route('customers.store') }}" method="POST">
    @csrf

    <label>Full Name:</label>
    <input type="text" name="full_name" value="{{ old('full_name') }}">
    <br><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ old('email') }}">
    <br><br>

    <label>Phone:</label>
    <input type="text" name="phone" value="{{ old('phone') }}">
    <br><br>

    <button type="submit">Save Customer</button>
</form>

<br>
<a href="{{ route('customers.index') }}">Back</a>

</body>
</html>