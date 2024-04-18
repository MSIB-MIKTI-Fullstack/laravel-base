<<<<<<< HEAD
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('users.create') }}">Tambahkan Data</a>
    <table border="4">
        <br>
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
                <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
=======
@extends('users.layout.app')
@section('title')
    List Users
@endsection
@section('content')
    <div class="flex flex-col gap-2">
        <div class="flex m-4">
            <a href="{{ route('users.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add
                data</a>
        </div>
        <table class="table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="border px-4 py-2">{{ $user->name }}</td>
                        <td class="border px-4 py-2">{{ $user->email }}</td>
                        <td class="border px-4 py-2 flex gap-2">
                            <a href="{{ route('users.edit', $user->id) }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
>>>>>>> origin/yoga
