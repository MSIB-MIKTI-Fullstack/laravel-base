<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> create </title>
</head>
<body>
<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <label for="name"><strong>Name:</strong></label>
    <input type="text" name="name" id="name">

    <label for="email"><strong>Email:</strong></label>
    <input type="email" name="email" id="email">

    <button type="submit">ADD</button>
</form>
</body>
</html>