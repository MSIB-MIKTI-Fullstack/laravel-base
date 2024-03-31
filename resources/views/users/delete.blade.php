<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>

<body>
    @foreach ($users as $user)
    <div>
        <p>Nama: {{ $users->name }}</p>
        <p>Email: {{ $users->email }}</p>


        <!-- Tombol Hapus -->
        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    </div>
    @endforeach
</body>

</html>