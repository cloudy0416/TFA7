<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>

<h1>Edit Customer</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        <p style="color: red;">{{ $error }}</p>
    @endforeach
@endif

<form action="{{ route('customers.update', $customer->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Full Name:</label>
    <input type="text" name="full_name"
        value="{{ old('full_name', $customer->full_name) }}">
    <br><br>

    <label>Email:</label>
    <input type="email" name="email"
        value="{{ old('email', $customer->email) }}">
    <br><br>

    <label>Phone:</label>
    <input type="text" name="phone"
        value="{{ old('phone', $customer->phone) }}">
    <br><br>

    <button type="submit">Update Customer</button>
</form>

<br>
<a href="{{ route('customers.index') }}">Back</a>

</body>
</html>