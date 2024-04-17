{{-- @extends('layouts.admin.app')
@section('title_page')
    Create User
@endsection
@section('breadcrumb')
<li>
    <a href="#" class="text-gray-700 hover:text-primary-600 transition-colors duration-300">Users</a>
</li>
<li>
    <span class="text-gray-500 mx-2">/</span>
</li>
<li class="text-primary-600 hover:text-primary-700 cursor-pointer transition-colors duration-300">Create User</li>

@endsection
@section('content')
    <h1>isi create user</h1>
    @endsection
@push('scripts')
    <script src="{{ asset('design-system/assets/js/pages/analytics-index.init.js') }}"></script>
@endpush --}}


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