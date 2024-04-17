{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Edit User</title>
</head>
<body class="bg-gray-100">
    <form action="{{ route('users.update', $user->id) }}" method="POST" class="px-4 my-32 max-w-3xl mx-auto space-y-6">  
    @csrf
    @method('PUT')
        <h1 class="text-3xl font-semibold">Edit User</h1>
        <div>
            <label for="">Nama</label>
            <input type="text" name="name" placeholder="Nama" value="{{ $user->name }}" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none focus:border-cyan-500">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Email" value="{{ $user->email }}" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none focus:border-cyan-500">
        </div>
        <div>
            <input type="submit" value="Simpan" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none focus:border-cyan-500">
        </div>
    </form>
    
</body>
</html> --}}


@extends('users.layout.app')
@section('title')
    Edit User {{ $user->name }}
@endsection
@section('content')
    <div class="w-full max-w-xs">
        <form action="{{ route('users.update', $user->id) }}" method="POST"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="name" type="text" placeholder="Name" value="{{ $user->name }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="email" type="text" placeholder="Email" value="{{ $user->email }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="password" type="password">
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection