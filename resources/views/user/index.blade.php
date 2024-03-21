<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Index</title>
</head>

<body>
    <ul>
        <li><a href={{ route('user.index') }}>Home</a></li>
        <li><a href={{ route('user.create') }}>Create</a></li>
    </ul>
    @if (session('msgSuccess'))
        <p style="color: green">{{ session('msgSuccess') }}</p>
    @endif
    @if (session('msgDelete'))
        <p style="color: red">{{ session('msgDelete') }}</p>
    @endif
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a href="{{ route('user.edit', $item->id) }}">Edit</a>
                    <form action="{{ route('user.destroy', $item->id) }}" method="POST"> @csrf @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
