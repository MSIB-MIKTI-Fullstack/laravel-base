<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
    <ul>
        <li><a href={{ route('user.index') }}>Home</a></li>
        <li><a href={{ route('user.create') }}>Create</a></li>
    </ul>
    <form action="{{ route('user.store') }}" method="POST"> @csrf
        <label for="">Name :</label>
        <input type="text" name="name">
        <br><br>
        <label for="">Email :</label>
        <input type="text" name="email">
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
