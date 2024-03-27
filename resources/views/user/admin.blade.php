{{-- @extends('layouts.admin.app')
@section('title_page')
    Halaman Admin
@endsection
@section('breadcrumb')
    <li><a href="#" class="text-gray-500 dark:text-slate-400">Admin</a></li>
    <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
    <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">
        Data Admin</li>
@endsection
@section('content')
    <h1>Ini konten dari create users</h1>
@endsection
@push('scripts')
    <script src="{{ asset('design-system/assets/js/pages/analytics-index.init.js') }}"></script>
@endpush --}}

<x-admin-layout>
    <x-slot:title_page>
        Halaman Admin
    </x-slot:title_page>
    <x-slot:breadcrumb>
        <li><a href="#" class="text-gray-500 dark:text-slate-400">Admin</a></li>
        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
        <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">
            Data Admin</li>
    </x-slot:breadcrumb>
    <h1>Ini konten dari halaman admin</h1>
</x-admin-layout>