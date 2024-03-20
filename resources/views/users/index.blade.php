<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th><a href="{{ route('users.create') }}">tambah</a></th>
        </tr>
        @foreach ($users as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td><a href="{{ route('users.edit', $item->id) }}">edit</a></td>
            <td><form action="{{ route('users.destroy', $item->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit">delete</button>
            </form></td>
        </tr>
            @endforeach
    </table>
</body>
</html>