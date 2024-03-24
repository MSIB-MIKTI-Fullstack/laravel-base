<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD LARAVEL</title>
</head>
<body>
<a href="{{ route('users.create') }}">Add Data</a>
<br>
    <table border="4">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
</br>
        </tr>
        @foreach ($users as $index => $user)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                <a href="{{ route('users.edit', $user->id) }}" class="btn-edit">Edit</a>
                <form action="{{ route('users.destroy', $user->id) }}" method="post" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>