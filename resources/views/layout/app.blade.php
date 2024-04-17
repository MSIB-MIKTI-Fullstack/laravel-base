<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Robotech - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Mannatthemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('design-system/assets/images/favicon.ico') }}" />

    <!-- Css -->
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('design-system/assets/libs/icofont/icofont.min.css') }}?v={{ time() }}">
    <link href="{{ asset('design-system/assets/libs/flatpickr/flatpickr.min.css') }}?v={{ time() }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('design-system/assets/css/tailwind.min.css') }}?v={{ time() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="bg-[#EEF0FC]">

    <!-- leftbar-tab-menu -->
    @include('layout.navbar')


    <nav id="topbar" class="topbar border-b   fixed inset-x-0  duration-300
             block print:hidden z-50">
        <div class="mx-0 flex max-w-full flex-wrap items-center lg:mx-auto relative top-[50%] start-[50%] transform -translate-x-1/2 -translate-y-1/2">
            <div class="ltr:mx-2  rtl:mx-2">
                <button id="toggle-menu-hide" class="button-menu-mobile flex rounded-full md:me-0 relative">
                    <i data-lucide="menu" class="top-icon w-5 h-5"></i>
                </button>
            </div>

            <div class="order-1 ltr:ms-auto rtl:ms-0 rtl:me-auto flex items-center md:order-2">
                <div class="ltr:me-2 ltr:md:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4">
                    <button id="toggle-theme" class="flex rounded-full md:me-0 relative">
                        <span data-lucide="moon" class="top-icon w-5 h-5 light "></span>
                        <span data-lucide="sun" class="top-icon w-5 h-5 dark hidden"></span>
                    </button>
                </div>
                <div class="me-2  dropdown relative">
                    <button type="button" class="dropdown-toggle flex items-center rounded-full text-sm
                    focus:bg-none focus:ring-0 md:me-0" id="user-profile" aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                        <img class="h-8 w-8 rounded-full" src="{{ asset('design-system/assets/images/users/avatar-1.png') }}" alt="user photo" />
                        <span class="ltr:ms-2 rtl:ms-0 rtl:me-2 hidden text-left xl:block">
                            <span class="block font-medium text-slate-600">Renaldi</span>
                            <span class="-mt-0.5 block text-xs text-slate-500">Admin</span>
                        </span>
                    </button>

                    <div class="left-auto right-0 z-50 my-1 hidden list-none
                    divide-y divide-gray-100 rounded border border-slate-700/10
                    text-base shadow bg-white w-40" id="navUserdata">

                        <ul class="py-1" aria-labelledby="navUserdata">
                            <li>
                                <a href="#" class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                         
                         ">
                                    <span data-lucide="user" class="w-4 h-4 inline-block text-slate-800 me-2"></span>
                                    Profile</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                         
                         ">
                                    <span data-lucide="settings" class="w-4 h-4 inline-block text-slate-800 me-2"></span>
                                    Settings</a>
                            </li>
                            <li>
                                <a href="auth-lockscreen.html" class="flex items-center py-2 px-3 text-sm text-red-500 hover:bg-gray-50 hover:text-red-600
                         
                         ">
                                    <span data-lucide="power" class="w-4 h-4 inline-block text-red-500 me-2"></span>
                                    Sign out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
            <div class="xl:w-full">
                <div class="flex flex-wrap">
                    <div class="flex items-center py-4 w-full">
                        <div class="w-full">
                            <div class="">
                                <div class="flex flex-wrap justify-between">
                                    <div class="items-center ">
                                        <<h1 class="font-medium text-3xl block">@yield('title_page')
                                            </h1>
                                            <ol class="list-reset flex text-sm">
                                                @yield('breadcrumb')
                                            </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- JAVASCRIPTS -->
    <!-- <div class="menu-overlay"></div> -->
    <script src="{{ asset('design-system/assets/libs/lucide/umd/lucide.min.js') }}"></script>
    <script src="{{ asset('design-system/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('design-system/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('design-system/assets/libs/@frostui/tailwindcss/frostui.js') }}"></script>
    <script src="{{ asset('design-system/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('design-system/assets/js/pages/analytics-index.init.js') }}"></script>
    <script src="{{ asset('design-system/assets/js/app.js') }}"></script>
    <!-- JAVASCRIPTS -->
</body>

</html>