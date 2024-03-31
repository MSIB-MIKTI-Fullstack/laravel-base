@extends('layout.app')

@section('title', 'Users')

@section('content')
<div class="ltr:flex flex-1 rtl:flex-row-reverse">
    <div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
        <div class="xl:w-full">
            <div class="flex flex-wrap">
                <div class="flex items-center py-4 w-full">
                    <div class="w-full">
                        <div class="">
                            @include('partials.page_header')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection