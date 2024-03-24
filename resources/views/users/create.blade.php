<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- resources/views/users/create.blade.php -->
<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <label for="name" class="bold-label">Name:</label>
    <input type="text" name="name" id="name">

    <label for="email" class="bold-label">Email:</label>
    <input type="email" name="email" id="email">

    <button type="submit">Add</button>
</form>
</body>
</html>