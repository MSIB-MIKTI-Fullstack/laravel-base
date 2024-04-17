<x-admin-layout textColor="text-blue-500">
    <x-slot:title>
        Create User
    </x-slot>

    <x-slot:breadcrumb>
        <li><a href="#" class="text-gray-500">Users</a></li>
        <li><span class="text-gray-500 mx-2">/</span></li>
        <li class="text-primary-500 hover:text-primary-600">
            Create User</li>
    </x-slot>
</x-admin-layout>

{{-- Past Task About CRUD Users Table
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
    @vite('resources/css/app.css')
</head>
<body class="flex justify-center items-center min-h-screen bg-slate-300 ">
    <div class="max-w-md w-full shadow-md rounded bg-white p-8 ">
        <h1 class="text-2xl mb-6">Add User</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" class="border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:border-emerald-500">
                @error('name')
                    <p class="block text-gray-500 mb2">{{ $message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" class="border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:border-emerald-500">
                @error('email')
                    <p class="block text-gray-500 mb2">{{ $message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" class="border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:border-emerald-500">
                @error('password')
                    <p class="block text-gray-500 mb2">{{ $message}}</p>
                @enderror
            </div>
            <button type="submit" class="text-white px-4 py-2 rounded bg-emerald-500 hover:bg-emerald-600">Submit</button>
        </form>
    </div>
</body>
</html>
--}}