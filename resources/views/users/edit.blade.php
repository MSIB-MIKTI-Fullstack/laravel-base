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

{{-- Past Task About CRUD Users Table
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
    @vite('resources/css/app.css')
</head>
<body class="flex justify-center items-center min-h-screen bg-slate-300">
    <div class="max-w-md w-full shadow-md rounded bg-white p-8 ">
        <h1 class="text-2xl mb-6">Edit User</h1>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" value="{{ $user->name }}" class="border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:border-emerald-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" value="{{ $user->email }}" class="border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:border-emerald-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" class="border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:border-emerald-500">
            </div>
            <button type="submit" class="text-white px-4 py-2 rounded bg-emerald-500 hover:bg-emerald-600">Submit</button>
        </form>
    </div>
</body>
</html>
--}}