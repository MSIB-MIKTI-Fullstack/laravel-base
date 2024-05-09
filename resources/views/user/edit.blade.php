<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('users.update', $users->id) }}" method="post">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <th>Name</th>
                <th>:</th>
                <th><input type="text" name="name" value="{{ $users->name }}"></th>
            </tr>
            <tr>
                <th>Email</th>
                <th>:</th>
                <th><input type="email" name="email" value="{{ $users->email }}"></th>
            </tr>
        </table>
        <button type="submit">Submit</button>
    </form>
</body>
</html>