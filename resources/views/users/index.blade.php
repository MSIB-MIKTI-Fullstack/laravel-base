{{-- @extends('layouts.admin.app')
@section('title_page')
    halaman user
@endsection
@section('breadcrumb')
<li>
    <a href="#" class="text-gray-700 hover:text-primary-600 transition-colors duration-300">Users</a>
</li>
<li>
    <span class="text-gray-500 mx-2">/</span>
</li>
<li class="text-primary-600 hover:text-primary-700 cursor-pointer transition-colors duration-300">Table User</li>

@endsection
@section('content')
    <h1>Daftar User</h1>
@endsection --}}


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