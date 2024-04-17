{{-- @extends('layouts.admin.app')
@section('title_page')
    Halaman Daftar User
@endsection
@section('breadcrum')
<li><a href="#" class="text-gray-500">User</a></li>
<li><span class="text-gray-500 mx-2">/</span></li>
<li class="text-gray-500">Dashboard</li>
<li><span class="text-gray-500 mx-2">/</span></li>
<li class="text-primary-500 hover:text-primary-600">User Table</li>
@endsection
@section('content')
    Ini Halaman Dafat User
@endsection --}}

<x-admin-layout>
    <x-slot:title>Home User Table</x-slot:title>
    <x-slot:breadcrum>
        <li><a href="#" class="text-gray-500">User</a></li>
        <li><span class="text-gray-500 mx-2">/</span></li>
        <li class="text-gray-500">Dashboard</li>
        <li><span class="text-gray-500 mx-2">/</span></li>
        <li class="text-primary-500 hover:text-primary-600">User Table</li>
    </x-slot:breadcrum>

    Ini Content
</x-admin-layout>