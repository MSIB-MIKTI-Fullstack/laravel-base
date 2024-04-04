{{-- @extends('layouts.admin.app')
@section('title_page')
    Halaman Daftar User
@endsection
	@@ -10,4 +10,16 @@
@endsection
@section('content')
    <h1>Ini konten dari index users</h1>
@endsection --}}
<x-admin-layout textColor="text-red-500">
    <x-slot:title>
        Daftar Users
    </x-slot>

    <x-slot:breadcrumb>
        <li><a href="#" class="text-gray-500 dark:text-slate-400">Users</a></li>
        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
        <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">
            User Table</li>
    </x-slot>
</x-admin-layout>