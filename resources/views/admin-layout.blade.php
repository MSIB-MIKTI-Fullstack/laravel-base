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
    <link rel="stylesheet" href="{{ asset('design-system/assets/libs/icofont/icofont.min.css') }}">
    <link href="{{ asset('design-system/assets/libs/flatpickr/flatpickr.min.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('design-system/assets/css/tailwind.min.css') }}">
    @vite(['resources/js/app.js'])
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical"
    class="bg-[#EEF0FC]">

    <!-- leftbar-tab-menu -->
    <div
    class="min-h-full z-[99]  fixed inset-y-0 print:hidden bg-gradient-to-t from-[#06090f] from-10% via-[#06090f] via-40% to-[#5c3dc3] to-100% main-sidebar duration-300 group-data-[sidebar=dark]:bg-[#06090f] group-data-[sidebar=brand]:bg-brand group-[.dark]:group-data-[sidebar=brand]:bg-[#06090f]">
        <div
            class=" text-center border-b bg-[#06090f] border-r h-[64px] flex justify-center items-center brand-logo group-data-[sidebar=dark]:bg-[#06090f] group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:bg-brand group-[.dark]:group-data-[sidebar=brand]:bg-[#06090f] group-data-[sidebar=brand]:border-slate-700/40">
            <a href="{{ asset('design-system/index.html')}}" class="logo">
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
                                        <a href="{{ asset('design-system/index.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/admin-products.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Products
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/admin-products.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Add New Product
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/admin-customers.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Customers
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/admin-customers-details.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Customers Details
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/admin-orders.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Orders
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/admin-order-details.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Order Details
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/admin-refund.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Refund
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#"
                                class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200 "
                                data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <span data-lucide="home"
                                    class="w-5 h-5 text-center text-slate-800 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                <span>Customer</span>
                                <i
                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180 "></i>
                            </a>
                            <div id="Customer-flush" class="hidden  overflow-hidden">
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/customers-home.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/customers-pro-details.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Product details
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/customers-products.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Product filter
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/customers-cart.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Cart
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/customers-checkout.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Checkout
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/customers-profile.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/customers-stores.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Favourite store
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/customers-wishlist.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Wishlist
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/customers-order-track.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Order track
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/customers-invoice.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Invoice
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <a href="#"
                                    class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200">
                                    <span data-lucide="grid"
                                        class="w-5 h-5 text-center text-slate-800 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                    <span>Apps</span>
                                    <i
                                        class="icofont-thin-down fc-collapse-open:rotate-180 ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></i>
                                </a>
                            </div>
                            <div class="hidden  overflow-hidden">
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2" id="apps-accordion"
                                    data-fc-type="accordion">
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/apps-chat.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200  flex items-center decoration-0 px-3 py-3">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Chat
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/apps-contact-list.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Contact List
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/apps-calendar.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Calendar
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/apps-files.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            File Mamager
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="{{ asset('design-system/apps-invoice.html')}}"
                                            class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Invoice
                                        </a>
                                    </li>
                                    <li>
                                        <div id="Email" data-fc-type="collapse" data-fc-parent="apps-accordion">
                                            <a href="#"
                                                class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200 "
                                                aria-expanded="false" aria-controls="Email-flush">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                <span>Email</span>
                                                <i
                                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400  fc-collapse-open:rotate-180"></i>
                                            </a>
                                        </div>
                                        <div id="Email-flush" class=" hidden  overflow-hidden "
                                            aria-labelledby="Email">
                                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/apps-email-inbox.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Inbox
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/apps-email-read.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Read Email
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>


                            <div
                                class="border-b border-dashed my-3 group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:border-slate-700/40">
                            </div>
                            <div
                                class="text-[9px] text-slate-600 group-data-[sidebar=dark]:text-slate-500 group-data-[sidebar=brand]:text-slate-400">
                                C<span>omponents & Extra</span>
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
                                        <div id="UI_Elements" data-fc-type="collapse"
                                            data-fc-parent="UI_Kit-accordion">
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
                                        <div id="UI_Elements-flush" class=" hidden  overflow-hidden "
                                            aria-labelledby="UI_Elements">
                                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/ui-alerts.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Alerts
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/ui-avatars.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Avatars
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/ui-buttons.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Buttons
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/ui-badges.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Budges
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('ui-cards.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Cards
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/ui-carousels.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Carousels
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('ui-dropdowns.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Dropdowns
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/ui-grids.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Grids
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/ui-images.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Images
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/ui-lists.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Lists
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/ui-modals.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Modals
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/ui-navs.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Navs
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('ui-navbars.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Navbars
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('ui-paginations.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Paginations
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/ui-popover-tooltips.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Popover & Tooltips
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/ui-progress.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Progress
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/ui-spinners.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Spinners
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/ui-tabs-accordions.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Tabs & Accordions
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/ui-typography.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Typography
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/ui-progress.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Videos
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <div id="Advanced_UI" data-fc-type="collapse"
                                            data-fc-parent="UI_Kit-accordion">
                                            <a href="#"
                                                class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200 "
                                                aria-expanded="false" aria-controls="Advanced_UI-flush">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                <span>Advanced UI</span>
                                                <i
                                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400  fc-collapse-open:rotate-180"></i>
                                            </a>
                                        </div>
                                        <div id="Advanced_UI-flush" class=" hidden  overflow-hidden "
                                            aria-labelledby="Advanced_UI">
                                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/advanced-animation.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Animation
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/advanced-clipboard.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Clipboard
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/advanced-dragula.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Dragula
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/advanced-highlight.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Highlight
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/advanced-rangeslider.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Range Slider
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/advanced-ratings.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Ratings
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/advanced-ribbons.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Ribbons
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href=" {{ asset('design-system/advanced-sweetalerts.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Sweet Alert
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <div id="Forms" data-fc-type="collapse"
                                            data-fc-parent="UI_Kit-accordion">
                                            <a href="#"
                                                class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                                                aria-expanded="false" aria-controls="Forms-flush">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                <span>Forms</span>
                                                <i
                                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180"></i>
                                            </a>
                                        </div>
                                        <div id="Forms-flush" class=" hidden  overflow-hidden "
                                            aria-labelledby="Forms">
                                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                                <li class="nav-item relative block">
                                                    <a href="{{ asset('design-system/forms-elements.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Basic Elements
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="{{asset('design-system/forms-advance.html')}}"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Advanced Elements
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="forms-validation.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Validation
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="forms-wizard.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Wizard
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="forms-editors.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Editors
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="forms-uploads.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Uploads
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="forms-img-crop.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Image Crop
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <div id="Charts" data-fc-type="collapse"
                                            data-fc-parent="UI_Kit-accordion">
                                            <a href="#"
                                                class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                                                aria-expanded="false" aria-controls="Charts-flush">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                <span>Charts</span>
                                                <i
                                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180"></i>
                                            </a>
                                        </div>
                                        <div id="Charts-flush" class=" hidden  overflow-hidden "
                                            aria-labelledby="Charts">
                                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                                <li class="nav-item relative block">
                                                    <a href="charts-apex.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Apex
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="charts-echarts.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Echarts
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="charts-justgage.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        JustGage
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="charts-chartjs.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Chartjs
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="charts-toast-ui.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        ToastUI
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div id="Tables" data-fc-type="collapse"
                                            data-fc-parent="UI_Kit-accordion">
                                            <a href="#"
                                                class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                                                aria-expanded="false" aria-controls="Tables-flush">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                <span>Tables</span>
                                                <i
                                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180"></i>
                                            </a>
                                        </div>
                                        <div id="Tables-flush" class=" hidden  overflow-hidden "
                                            aria-labelledby="Tables">
                                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                                <li class="nav-item relative block">
                                                    <a href="tables-basic.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Basic
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="tables-datatable.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Datatable
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div id="Icons" data-fc-type="collapse"
                                            data-fc-parent="UI_Kit-accordion">
                                            <a href="#"
                                                class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                                                aria-expanded="false" aria-controls="Icons-flush">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                <span>Icons</span>
                                                <i
                                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180"></i>
                                            </a>
                                        </div>
                                        <div id="Icons-flush" class=" hidden  overflow-hidden "
                                            aria-labelledby="Icons">
                                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                                <li class="nav-item relative block">
                                                    <a href="icons-lucide.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Lucide
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="icons-fontawesome.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Fontawesome
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="icons-icofont.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Icofont
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div id="Maps" data-fc-type="collapse"
                                            data-fc-parent="UI_Kit-accordion">
                                            <a href="#"
                                                class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                                                aria-expanded="false" aria-controls="Maps-flush">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                <span>Maps</span>
                                                <i
                                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180"></i>
                                            </a>
                                        </div>
                                        <div id="Maps-flush" class=" hidden  overflow-hidden "
                                            aria-labelledby="Maps">
                                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                                <li class="nav-item relative block">
                                                    <a href="maps-google.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Google Maps
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="maps-leaflet.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Leaflet Maps
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="maps-vector.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Vector Maps
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div id="Email-Temp" data-fc-type="collapse"
                                            data-fc-parent="UI_Kit-accordion">
                                            <a href="#"
                                                class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                                                aria-expanded="false" aria-controls="Email-Temp-flush">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                <span>Email Templates</span>
                                                <i
                                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180"></i>
                                            </a>
                                        </div>
                                        <div id="Email-Temp-flush" class=" hidden  overflow-hidden "
                                            aria-labelledby="Email-Temp">
                                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                                <li class="nav-item relative block">
                                                    <a href="email-templates-alert.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Alert Email
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="email-templates-basic.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Basic Email
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a href="email-templates-billing.html"
                                                        class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Billing Email
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <a href="#"
                                class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                                data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <span data-lucide="file-plus"
                                    class="w-5 h-5 text-center text-slate-800 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                <span>Pages</span>
                                <i
                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800  fc-collapse-open:rotate-180 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></i>
                            </a>

                            <div id="Pages-flush" class="hidden  overflow-hidden">
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a href="pages-blogs.html"
                                            class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Blogs
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="pages-pricing.html"
                                            class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Pricing
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="pages-profile.html"
                                            class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="pages-starter.html"
                                            class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Starter
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="pages-timeline.html"
                                            class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Timeline
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#"
                                class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                                data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <span data-lucide="lock"
                                    class="w-5 h-5 text-center text-slate-800 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                <span>Authentication</span>
                                <i
                                    class="icofont-thin-down  fc-collapse-open:rotate-180 ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></i>
                            </a>
                            <div id="Authentication-flush" class="hidden  overflow-hidden"
                                aria-labelledby="Authentication">
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a href="auth-login.html"
                                            class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Log In
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="auth-register.html"
                                            class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Register
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="auth-recover-pw.html"
                                            class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Recover Password
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="auth-lock-screen.html"
                                            class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Lock Screen
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="auth-404.html"
                                            class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            404
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="auth-500.html"
                                            class="nav-link  hover:text-primary-500  rounded-md relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            500
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="rounded-md py-4 px-3 mt-12  mb-4 relative bg-primary-300/10 text-center">
                    <a href="javascript: void(0);" class="float-right close-btn text-slate-400">
                        <i class="mdi mdi-close"></i>
                    </a>
                    <h5
                        class="my-3 text-lg font-medium text-slate-700 group-data-[sidebar=dark]:text-slate-300 group-data-[sidebar=brand]:text-slate-300">
                        Mannat Themes</h5>
                    <p class="mb-3 text-sm text-slate-400">We Design and Develop Clean and High Quality Web
                        Applications</p>
                    <button
                        class="px-2 py-1 mb-2 text-orange-400 hover:text-white border border-orange-300 hover:bg-orange-300 focus:outline-none  rounded text-sm  text-center ">Upgrade
                        your plan</button>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.admin.navbar')

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
                                        <h1 class="font-medium text-3xl block">@yield('title_page')</h1>
                                        <ol class="list-reset flex text-sm">
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
    <script src="{{ asset('design-system/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('design-system/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('design-system/assets/libs/@frostui/tailwindcss/frostui.js') }}"></script>
    <script src="{{ asset('design-system/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('design-system/assets/js/app.js') }}"></script>
    <script src="{{ asset('design-system/assets/images') }}"></script>

    <!-- JAVASCRIPTS -->

</body>

</html>