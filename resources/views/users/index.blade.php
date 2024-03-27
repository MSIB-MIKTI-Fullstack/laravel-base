{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
</head>
<body>
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($users as $item)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $item->name }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $item->email }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <a href="{{ route ('users.edit', $item->id )}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        <form action="{{ route('users.destroy', $item->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> --}}


</------------------------------------------------------------------------------------------------------------------------->
@extends('layouts.admin.app')
@section('title_page')
    halaman user
@endsection
@section('breadcrumb')
<li>
    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 transition-colors duration-300">Users</a>
</li>
<li>
    <span class="text-gray-500 dark:text-gray-400 mx-2">/</span>
</li>
<li class="text-primary-600 hover:text-primary-700 dark:text-primary-400 cursor-pointer transition-colors duration-300">Table User</li>

@endsection
@section('content')
    <h1>Daftar User</h1>
@endsection
