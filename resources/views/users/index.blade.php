<x-admin-layout textColor="text-red-500">
    <x-slot:title>
        Daftar Users
    </x-slot>

    <x-slot:breadcrumb>
        <li><a href="#" class="text-gray-500">Users</a></li>
        <li><span class="text-gray-500 mx-2">/</span></li>
        <li class="text-primary-500 hover:text-primary-600">
            User Table</li>
    </x-slot>
</x-admin-layout>

{{-- Past Task About CRUD Users Table
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index User</title>
    @vite('resources/css/app.css')
</head>
<body class="flex justify-center items-center min-h-screen bg-slate-300">
    <div class="max-w-full mx-auto p-8 bg-white shadow-md rounded">
        <h1 class="text-2xl mb-6">List of users</h1>
        <a href="{{ route('users.create') }}" class="mb-4 inline-block px-4 py-2 text-white rounded bg-emerald-500 hover:bg-emerald-600">Add data</a>
        <table class="w-auto border-collapse border border-slate-500">
            <thead>
                <tr>
                    <th class="border border-slate-500 px-4 py-2">Nama</th>
                    <th class="border border-slate-500 px-4 py-2">Email</th>
                    <th class="border border-slate-500 px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td class="border border-slate-500 px-4 py-2">{{ $user->name }}</td>
                    <td class="border border-slate-500 px-4 py-2">{{ $user->email }}</td>
                    <td class="border border-slate-500 px-4 py-2">
                        <a href="{{ route('users.edit', $user->id) }}" class="text-emerald-600 hover:underline">Edit</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-rose-700 hover:underline ml-4">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html> 
--}}