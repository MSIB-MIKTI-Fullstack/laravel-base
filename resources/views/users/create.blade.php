{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Buat User</title>
</head>
<body class="bg-gray-100">
    
    <form action="{{ route('users.store') }}" method="post" class="px-4 my-32 max-w-3xl mx-auto space-y-6">
        @csrf
        <h1 class="text-3xl font-semibold">Buat User</h1>
        <div>
            <label for="">Nama</label>
            <input type="text" name="name" placeholder="nama" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none focus:border-cyan-500">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" placeholder="email" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none focus:border-cyan-500">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" placeholder="password" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none focus:border-cyan-500">
        </div>
        <div>
            <input type="submit" value="simpan" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none focus:border-cyan-500">
        </div>
    </form>
    
</body>
</html> --}}

</------------------------------------------------------------------------------------------------------------------------->

@extends('layouts.admin.app')
@section('title_page')
    Create User
@endsection
@section('breadcrumb')
<li>
    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 transition-colors duration-300">Users</a>
</li>
<li>
    <span class="text-gray-500 dark:text-gray-400 mx-2">/</span>
</li>
<li class="text-primary-600 hover:text-primary-700 dark:text-primary-400 cursor-pointer transition-colors duration-300">Create User</li>

@endsection
@section('content')
    <h1>isi create user</h1>
    @endsection
@push('scripts')
    <script src="{{ asset('design-system/assets/js/pages/analytics-index.init.js') }}"></script>
@endpush
