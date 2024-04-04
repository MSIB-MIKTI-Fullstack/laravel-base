{{-- @extends('layouts.admin.app')
@section('title_page')
    Halaman Create User
@endsection
	@@ -13,4 +13,16 @@
@endsection
@push('scripts')
    <script src="{{ asset('design-system/assets/js/pages/analytics-index.init.js') }}"></script>
@endpush --}}
<x-admin-layout textColor="text-blue-500">
    <x-slot:title>
        Create User
    </x-slot>

    <x-slot:breadcrumb>
        <li><a href="#" class="text-gray-500 dark:text-slate-400">Users</a></li>
        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
        <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">
            Create User</li>
    </x-slot>
</x-admin-layout>