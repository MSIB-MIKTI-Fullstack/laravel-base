<div>
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
        <link rel="stylesheet"
            href="{{ asset('design-system/assets/libs/icofont/icofont.min.css') }}?v={{ time() }}">
        <link href="{{ asset('design-system/assets/libs/flatpickr/flatpickr.min.css') }}?v={{ time() }}"
            type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('design-system/assets/css/tailwind.min.css') }}?v={{ time() }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical"
        class="bg-[#EEF0FC]">

        <!-- leftbar-tab-menu -->
        <div
            class="min-h-full z-[99]  fixed inset-y-0 print:hidden bg-gradient-to-t from-[#06090f] from-10% via-[#06090f] via-40% to-[#06090f] to-100% main-sidebar duration-300 group-data-[sidebar=dark]:bg-[#06090f] group-data-[sidebar=brand]:bg-brand group-[.dark]:group-data-[sidebar=brand]:bg-[#06090f]">
            <div
                class=" text-center border-b bg-[#06090f] border-r h-[64px] flex justify-center items-center brand-logo group-data-[sidebar=dark]:bg-[#06090f] group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:bg-brand group-[.dark]:group-data-[sidebar=brand]:bg-[#06090f] group-data-[sidebar=brand]:border-slate-700/40">
                <a href="index.html" class="logo">
                    <span>
                        <img src="{{ asset('design-system/assets/images/logo-sm.png') }}" alt="logo-small"
                            class="logo-sm h-8 align-middle inline-block">
                    </span>
                    <span>
                        <img src="{{ asset('design-system/assets/images/logo.png') }}" alt="logo-large"
                            class="logo-lg h-[28px] logo-light hidden ms-1 group-data-[sidebar=dark]:inline-block group-data-[sidebar=brand]:inline-block">
                        <img src="{{ asset('design-system/assets/images/logo.png') }}" alt="logo-large"
                            class="logo-lg h-[28px] logo-dark inline-block ms-1 group-data-[sidebar=dark]:hidden group-data-[sidebar=brand]:hidden">
                    </span>
                </a>
            </div>
            <div class="border-r pb-14 h-[100vh] group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:border-slate-700/40"
                data-simplebar>
                <div class="p-4 block">
                    <ul class="navbar-nav">
                        <li
                            class="uppercase text-[11px]  text-primary-500 mt-0 leading-4 mb-2 group-data-[sidebar=dark]:text-primary-400 group-data-[sidebar=brand]:text-primary-300">
                            <span
                                class="text-[9px] text-slate-600 group-data-[sidebar=dark]:text-slate-500 group-data-[sidebar=brand]:text-slate-400">DashboardS
                                & Apps</span>
                        </li>
                        <li>
                            <div id="parent-accordion" data-fc-type="accordion">
                                <a href="#"
                                    class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200 "
                                    data-fc-type="collapse" data-fc-parent="parent-accordion">
                                    <span data-lucide="home"
                                        class="w-5 h-5 text-center text-slate-800 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                    <span>Admin</span>
                                    <i
                                        class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180 "></i>
                                </a>

                                <div id="Admin-flush" class="hidden  overflow-hidden">
                                    <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                        <li class="nav-item relative block">
                                            <a href="{{ route('view.admin.dashboard') }}"
                                                class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                                Dashboard
                                            </a>
                                        </li>
                                        <li class="nav-item relative block">
                                            <a href="{{ route('view.admin.products') }}"
                                                class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                                Products
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div
                                class="border-b border-dashed my-3 group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:border-slate-700/40">
                            </div>
                            <div
                                class="text-[9px] text-slate-600 group-data-[sidebar=dark]:text-slate-500 group-data-[sidebar=brand]:text-slate-400">
                                <span>Components & Extra</span>
                            </div>
                            <div data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <a href="#"
                                    class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200">
                                    <span data-lucide="box"
                                        class="w-5 h-5 text-center text-slate-800 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                    <span>UI Kit</span>
                                    <i
                                        class="icofont-thin-down fc-collapse-open:rotate-180 ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></i>
                                </a>
                            </div>
                            <div class="hidden  overflow-hidden">
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2" id="UI_Kit-accordion"
                                    data-fc-type="accordion">
                                    <li>
                                        <div id="UI_Elements" data-fc-type="collapse" data-fc-parent="UI_Kit-accordion">
                                            <a href="#"
                                                class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                                                aria-expanded="false" aria-controls="UI_Elements-flush">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                <span>UI Elements</span>
                                                <i
                                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                </div>
                </li>
                </ul>
            </div>
        </div>
</div>


<nav id="topbar"
    class="topbar border-b   fixed inset-x-0  duration-300
             block print:hidden z-50">
    <div
        class="mx-0 flex max-w-full flex-wrap items-center lg:mx-auto relative top-[50%] start-[50%] transform -translate-x-1/2 -translate-y-1/2">
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
                <button type="button"
                    class="dropdown-toggle flex items-center rounded-full text-sm
                    focus:bg-none focus:ring-0 md:me-0"
                    id="user-profile" aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                    <img class="h-8 w-8 rounded-full"
                        src="{{ asset('design-system/assets/images/users/avatar-1.png') }}" alt="user photo" />
                    <span class="ltr:ms-2 rtl:ms-0 rtl:me-2 hidden text-left xl:block">
                        <span class="block font-medium text-slate-600">Maria Gibson</span>
                        <span class="-mt-0.5 block text-xs text-slate-500">Admin</span>
                    </span>
                </button>

                <div class="left-auto right-0 z-50 my-1 hidden list-none
                    divide-y divide-gray-100 rounded border border-slate-700/10
                    text-base shadow bg-white w-40"
                    id="navUserdata">

                    <ul class="py-1" aria-labelledby="navUserdata">
                        <li>
                            <a href="#"
                                class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                         
                         ">
                                <span data-lucide="user"
                                    class="w-4 h-4 inline-block text-slate-800 me-2"></span>
                                Profile</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                         
                         ">
                                <span data-lucide="settings"
                                    class="w-4 h-4 inline-block text-slate-800 me-2"></span>
                                Settings</a>
                        </li>
                        <li>
                            <a href="auth-lockscreen.html"
                                class="flex items-center py-2 px-3 text-sm text-red-500 hover:bg-gray-50 hover:text-red-600
                         
                         ">
                                <span data-lucide="power"
                                    class="w-4 h-4 inline-block text-red-500 me-2"></span>
                                Sign out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>


<div class="ltr:flex flex-1 rtl:flex-row-reverse">
    <div
        class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
        <div class="xl:w-full">
            <div class="flex flex-wrap">
                <div class="flex items-center py-4 w-full">
                    <div class="w-full">
                        <div class="">
                            <div class="flex flex-wrap justify-between">
                                <div class="items-center ">
                                    <h1 class="font-medium text-3xl block">{{ $title_page }}
                                    </h1>
                                    <ol class="list-reset flex text-sm">
                                        {{ $breadcrumb }}
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end container-->
        <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14">
            {{ $slot }}
        </div><!--end container-->
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
</div>
