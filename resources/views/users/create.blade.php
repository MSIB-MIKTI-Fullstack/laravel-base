{{-- @extends('layouts.admin.app')
@section('title_page')
    Halaman Create User
@endsection
@section('breadcrum')
<li><a href="#" class="text-gray-500">User</a></li>
<li><span class="text-gray-500 mx-2">/</span></li>
<li class="text-gray-500">Dashboard</li>
<li><span class="text-gray-500 mx-2">/</span></li>
<li class="text-primary-500 hover:text-primary-600">User Create</li>
@endsection
@section('content')
    Ini Halaman Create User
@endsection --}}
<x-admin-layout>
    <x-slot:title>
        Create User
    </x-slot:title>
    <x-slot:breadcrum>
        <li><a href="#" class="text-gray-500">User</a></li>
        <li><span class="text-gray-500 mx-2">/</span></li>
        <li class="text-gray-500">Dashboard</li>
        <li><span class="text-gray-500 mx-2">/</span></li>
        <li class="text-primary-500 hover:text-primary-600">User Create</li>
    </x-slot:breadcrum>
    Ini Content Create Table User
</x-admin-layout>