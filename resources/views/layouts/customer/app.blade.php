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
    <link rel="stylesheet" href="{{ asset('design-system/assets/libs/nice-select2/css/nice-select2.css') }}">
    <link rel="stylesheet" href="{{ asset('design-system/assets/libs/swiper/swiper-bundle.min.css') }}">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('design-system/assets/libs/icofont/icofont.min.css') }}">
    <link href="{{ asset('design-system/assets/libs/flatpickr/flatpickr.min.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('design-system/assets/css/tailwind.min.css') }}">

</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="bg-[#EEF0FC]">

    <!-- leftbar-tab-menu -->
    <header class="relative z-40 w-full bg-white print:hidden">
        <div class="hidden border-b sm:block py-1 bg-black">
            <div class="container mx-auto">
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4 md:w-1/2 lg:w-1/2 self-center">
                        <ul class="-mx-3 flex items-center">
                            <li class="mx-1">
                                <a href="javascript:void(0)" class="inline-block  px-2 text-sm font-medium text-gray-400 border border-slate-500/40 rounded-full text-body-color hover:text-white">
                                    About Us
                                </a>
                            </li>
                            <li class="mx-1">
                                <a href="customers-wishlist.html" class="inline-block  px-2 text-sm font-medium text-gray-400 border border-slate-500/40 rounded-full text-body-color hover:text-white">
                                    Wishlist <span class="bg-green-600/5 text-green-600 text-[11px] font-medium px-1 py-0.5 rounded-full h-5">3</span>
                                </a>
                            </li>
                            <li class="mx-1">
                                <a href="customers-order-track.html" class="inline-block  px-2 text-sm font-medium text-gray-400 border border-slate-500/40 rounded-full text-body-color hover:text-white">
                                    Order Tracking
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full px-4 md:w-1/2 lg:w-1/2">
                        <div class="-mx-3 hidden items-center justify-end md:flex">
                            <div class="me-2">
                                <div class="hidden items-center pe-1 md:flex">
                                    <div class="me-3">
                                        <i data-lucide="phone" class="w-4 h-4 stroke-slate-300"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-400">
                                            Need Help?
                                            <span class="text-gray-300">+001 123 456 789</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="me-2">
                                <div class="relative z-20 border border-slate-500/40 rounded-full px-2">
                                    <select class="relative z-20 w-full appearance-none text-slate-200  bg-transparent ps-2 pe-4 text-sm font-medium  outline-none transition">
                                        <option value="" class="text-slate-700">English</option>
                                        <option value="" class="text-slate-700">Urdu</option>
                                        <option value="" class="text-slate-700">Hindi</option>
                                    </select>
                                    <span class="absolute right-2 top-1/2 z-10 mt-[-2px] h-2 w-2 -translate-y-1/2 rotate-45 border-r border-b border-slate-400"></span>
                                </div>
                            </div>
                            <div class="me-2">
                                <div class="relative z-20 border border-slate-500/40 rounded-full px-2">
                                    <select class="relative z-20 w-full appearance-none text-slate-200  bg-transparent ps-2 pe-4 text-sm font-medium  outline-none transition">
                                        <option value="" class="text-slate-700">USD</option>
                                        <option value="" class="text-slate-700">INR</option>
                                        <option value="" class="text-slate-700">ERU</option>
                                    </select>
                                    <span class="absolute right-2 top-1/2 z-10 mt-[-2px] h-2 w-2 -translate-y-1/2 rotate-45 border-r border-b border-slate-400"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-b lg:py-3 bg-[#EEF0FC]">
            <div class="container mx-auto">
                <div class="relative -mx-4 flex items-center justify-center sm:justify-between">
                    <div class="w-64 max-w-full px-4 sm:w-60 lg:w-48">
                        <a href="index.html" class="block w-full py-5 lg:py-3">
                            <img src="assets/images/logo-sm.png" alt="logo" class="w-6 md:w-8 inline-block">
                            <img src="assets/images/logo-dark.png" alt="logo" class="w-20 md:w-24 inline-block">
                        </a>
                    </div>
                    <div class="w-full items-center justify-end px-4 sm:flex lg:justify-between">
                        <div class="hidden w-full lg:flex">
                            <form class="relative flex w-full items-center rounded-md border bg-[#fff]">

                                <input type="text" placeholder="I'm shopping for..." class="w-full bg-transparent py-3 ps-6 pe-[200px] text-base font-medium text-body-color outline-none">
                                <div class="absolute right-12 z-20 border-s border-[#d9d9d9] px-2">
                                    <select id="default" class="nice-select border-0 relative z-20 appearance-none bg-transparent ps-2 pe-6 font-medium text-black outline-none">
                                        <option>All categories</option>
                                        <option>Best matches</option>
                                        <option>Newest</option>
                                    </select>
                                </div>
                                <a href="javascript:void(0)" class="absolute top-0 right-0 flex h-full w-[52px] items-center justify-center rounded-tr-md rounded-br-md border-s">
                                    <i data-lucide="search" class="w-6 h-6"></i>
                                </a>
                            </form>
                        </div>
                        <div class="flex w-full items-center justify-end space-x-2 md:space-x-4">
                            <div class=" dropdown relative block lg:hidden">
                                <button type="button" class="dropdown-toggle flex rounded-full md:me-0 h-10 w-10 items-center justify-center  border-[.5px] bg-[#f4f7ff] text-dark" aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                                    <span data-lucide="search" class="w-5 h-5"></span>
                                </button>

                                <div class="-left-40 md:left-auto right-0 z-50 my-1 hidden min-w-[300px] sm:min-w-[400px] md:min-w-[400px] lg:min-w-[500px] max-w-full
                        list-none divide-y  divide-gray-100 rounded-md border-slate-700
                        md:border-white text-base shadow bg-white
                       " onclick="event.stopPropagation()">
                                    <form class="relative flex w-full items-center rounded-md border bg-[#f4f7ff] ">
                                        <div class="relative z-20 border-r border-[#d9d9d9] px-2 hidden lg:block">
                                            <select id="default" class="nice-select border-0 relative z-20 appearance-none bg-transparent ps-2 pe-6 font-medium text-black outline-none">
                                                <option>All</option>
                                                <option>Best matches</option>
                                                <option>Newest</option>
                                            </select>
                                        </div>
                                        <input type="text" placeholder="I'm shopping for..." class="w-full bg-transparent py-3 ps-6 pe-[58px] text-base font-medium text-body-color outline-none">
                                        <a href="javascript:void(0)" class="absolute top-0 right-0 flex h-full w-[52px] items-center justify-center rounded-tr-md rounded-br-md border-s ">
                                            <i data-lucide="search" class="w-6 h-6"></i>
                                        </a>
                                    </form>
                                </div>
                            </div>
                            <x-cart />
                            <div class="me-2  dropdown relative">
                                <button type="button" class="dropdown-toggle flex items-center rounded-full text-sm
                        focus:bg-none focus:ring-0 md:me-0" id="user-profile" aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                                    <img class="h-8 w-8 rounded-full" src="assets/images/users/avatar-10.png" alt="user photo" />
                                    <span class="ltr:ms-2 rtl:ms-0 rtl:me-2 hidden text-left xl:block">
                                        <span class="block font-medium text-slate-600">Maria
                                            Gibson</span>
                                    </span>
                                </button>

                                <div class="left-auto right-0 z-50 my-1 hidden list-none
                        divide-y divide-gray-100 rounded border-slate-700 md:border-white
                        text-base shadow bg-white w-40" id="navUserdata">

                                    <ul class="py-1" aria-labelledby="navUserdata">
                                        <li>
                                            <a href="customers-profile.html" class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                             
                             ">
                                                <span data-lucide="user" class="w-4 h-4 inline-block text-slate-800 me-2"></span>
                                                Profile</a>
                                        </li>
                                        <li>
                                            <a href="customers-invoice.html" class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                             
                             ">
                                                <span data-lucide="file-spreadsheet" class="w-4 h-4 inline-block text-slate-800 me-2"></span>
                                                Invoice</a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen.html" class="flex items-center py-2 px-3 text-sm text-red-400 hover:bg-gray-50 hover:text-red-500
                             
                             ">
                                                <span data-lucide="power" class="w-4 h-4 inline-block text-red-400 me-2"></span>
                                                Sign out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container mx-auto">
                <div class="relative -mx-4 flex items-center justify-between">
                    <div class="w-full max-w-full px-4 lg:w-60">
                        <div class="relative py-4 group categories">
                            <a href="javascript:void(0)" class="inline-flex  relative items-center justify-between whitespace-nowrap rounded bg-brand-50/70 px-5 py-2 text-base font-medium text-brand-500 hover:bg-opacity-90">
                                <span class="pe-2">
                                    <i data-lucide="menu" class="h-5 w-5"></i>
                                </span>
                                All categories
                            </a>

                            <div class="absolute left-0 top-[100%] z-10 w-[250px] rounded-lg border-[.5px] bg-white py-4   duration-400 group-[.categories]:group-hover:block  hidden">
                                <span class="absolute -top-[6px] left-6 -z-10 hidden h-3 w-3 rotate-45 rounded-sm border-[.5px] border-r-0 border-b-0 bg-white lg:block"></span>

                                <div class="group submenu relative px-6">
                                    <a href="javascript:void(0)" class="flex items-center justify-between rounded py-2 text-sm font-medium text-body-color hover:text-brand group-hover:text-brand">
                                        Fashion
                                        <span>
                                            <i data-lucide="chevron-right" class="h-4"></i>
                                        </span>
                                    </a>

                                    <div class="left-full top-0 bg-white py-2 group-[.submenu]:group-hover:visible group-[.submenu]:group-hover:opacity-100 lg:invisible lg:absolute lg:w-[600px] lg:rounded lg:border-[.5px] lg:py-8 lg:px-8 lg:opacity-0 xl:w-[650px] block">
                                        <div class="-mx-2 flex flex-wrap">
                                            <div class="w-full px-2 lg:w-1/3">
                                                <div>
                                                    <h3 class="mb-3 text-base font-semibold text-black uppercase">
                                                        Man
                                                    </h3>
                                                    <a href="#" class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        Cargo Pants
                                                    </a>
                                                    <a href="#" class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        Jackets
                                                    </a>
                                                    <a href="#" class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        T-Shirts
                                                    </a>
                                                    <a href="#" class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        Shirts
                                                    </a>
                                                    <a href="#" class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        Jeans
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="w-full px-2 lg:w-1/3">
                                                <div>
                                                    <h3 class="mb-3 text-base font-semibold text-black uppercase">
                                                        Woman
                                                    </h3>
                                                    <a href="#" class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        Dresses
                                                    </a>
                                                    <a href="#" class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        Tees
                                                    </a>
                                                    <a href="#" class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        Leggings
                                                    </a>
                                                    <a href="#" class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        Wedding Dresses
                                                    </a>
                                                    <a href="#" class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        Prom Dresses
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="w-full px-2 lg:w-1/3">
                                                <h3 class="mb-3 text-base font-semibold text-black uppercase">
                                                    Kids
                                                </h3>
                                                <a href="#" class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    Body Wash
                                                </a>
                                                <a href="#" class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    Nightwear
                                                </a>
                                                <a href="#" class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    Shorts
                                                </a>
                                                <a href="#" class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    Sunglasses
                                                </a>
                                                <a href="#" class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    Summer Caps
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-6">
                                    <a href="#" class="flex items-center justify-between rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                        Phone & Smartwatch
                                    </a>
                                </div>
                                <div class="px-6">
                                    <a href="#" class="flex items-center justify-between rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                        Laptops
                                    </a>
                                </div>
                                <div class="px-6">
                                    <a href="#" class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                        Jewelry
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-full items-center justify-between px-4">
                        <div class="w-full">
                            <button data-collapse-toggle="mobile-menu-2" type="button" id="toggle-menu" class=" block ms-auto h-10 w-10 leading-10 border rounded-full  ring-brand focus:ring-1 lg:hidden" aria-controls="mobile-menu-2" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <i data-lucide="menu" class="w-5 h-5 mx-auto stroke-slate-600 "></i>
                                <i data-lucide="x" class="w-5 h-5 hidden mx-auto stroke-slate-600 "></i>
                            </button>
                            <nav id="mobile-menu-2" class="order-2 hidden w-full items-center justify-between md:order-1 md:ms-5 lg:flex md:w-auto">
                                <ul class="blcok items-center lg:flex px-4 md:px-0">
                                    <li>
                                        <a href="customers-home.html" class="flex justify-between py-2 text-base font-medium text-dark hover:text-brand lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="customers-products.html" class="flex justify-between py-2 text-base font-medium text-dark hover:text-brand lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6">
                                            Products
                                        </a>
                                    </li>
                                    <li>
                                        <a href="customers-wishlist.html" class="flex justify-between py-2 text-base font-medium text-dark hover:text-brand lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6">
                                            Wishlist
                                        </a>
                                    </li>
                                    <li>
                                        <a href="customers-stores.html" class="flex justify-between py-2 text-base font-medium text-dark hover:text-brand lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6">
                                            Stores
                                        </a>
                                    </li>
                                    <li>
                                        <a href="customers-checkout.html" class="flex justify-between py-2 text-base font-medium text-dark hover:text-brand lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6">
                                            Checkout
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="w-full max-w-full hidden lg:flex px-4 lg:w-[300px] xl:w-72 items-center">
                        <h5 class="text-xl font-semibold uppercase text-brand-500 flex items-center"><i class="icofont-sale-discount me-1 text-4xl"></i>up to <span class="text-xxl text-pink-500 font-bold">70%</span> off</h5>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div class="page-wrapper relative  duration-300 pt-0 w-full">
            <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0">
                <div class="container my-4">
                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-4 ">
                            <div class="bg-white border border-slate-200  rounded-md w-full relative">
                                <div class="border-b border-slate-200 py-3 px-4">
                                    <div class="flex-none md:flex">
                                        <h4 class="font-medium flex-1 self-center mb-2 md:mb-0">Order Summary</h4>
                                    </div>
                                </div><!--end header-title-->
                                <div class="flex flex-col">
                                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                        <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                            <div class="overflow-hidden">
                                                <table class="min-w-full">
                                                    <thead class="bg-slate-100">
                                                        <tr>
                                                            <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                                                Products
                                                            </th>
                                                            <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                                                Quantity
                                                            </th>
                                                            <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                                                Total
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Product 1 -->
                                                        <tr class="bg-white border-b border-dashed">
                                                            <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                                <img src="assets/images/products/01.png" alt="" class="mr-2 h-8 inline-block">
                                                                <h5 class="text-sm font-semibold text-slate-700 inline-block">
                                                                    White Table Camera</h5>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap">
                                                                1
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap">
                                                                $99
                                                            </td>
                                                        </tr>
                                                        <!-- Product 2 -->
                                                        <tr class="bg-white border-b border-dashed">
                                                            <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                                <img src="assets/images/products/02.png" alt="" class="mr-2 h-8 inline-block">
                                                                <h5 class="text-sm font-semibold text-slate-700 inline-block">
                                                                    New Colorfull Shoes</h5>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap">
                                                                1
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap">
                                                                $59
                                                            </td>
                                                        </tr>
                                                        <!-- Product 3 -->
                                                        <tr class="bg-white border-b-2 border-solid">
                                                            <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                                <img src="assets/images/products/03.png" alt="" class="mr-2 h-8 inline-block">
                                                                <h5 class="text-sm font-semibold text-slate-700 inline-block">
                                                                    Imported VR Box</h5>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap">
                                                                1
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap">
                                                                $49
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-white">
                                                            <td class="p-3 text-base font-semibold text-gray-900 whitespace-nowrap">
                                                                Total
                                                            </td>
                                                            <td class="p-3 text-base font-semibold text-gray-900 whitespace-nowrap">
                                                                3
                                                            </td>
                                                            <td class="p-3 text-base font-semibold text-gray-900 whitespace-nowrap">
                                                                $207
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--end card-->
                            <div class="bg-black shadow  rounded-md relative w-full mt-4">
                                <div class="flex-auto p-4">
                                    <div class="grid grid-cols-1  rounded-md">
                                        <div class="sm:-mx-6 lg:-mx-8">
                                            <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                                <table class="min-w-full">
                                                    <tbody>
                                                        <!-- 1 -->
                                                        <tr class="border-b border-dashed border-slate-500/60">
                                                            <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                                Subtotal
                                                            </td>
                                                            <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                                $207.00
                                                            </td>
                                                        </tr>
                                                        <!-- 2 -->
                                                        <tr class="border-b border-dashed border-slate-500/60">
                                                            <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                                Shipping Charge
                                                            </td>
                                                            <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                                $5.00
                                                            </td>
                                                        </tr>
                                                        <!-- 3 -->
                                                        <tr class="">
                                                            <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                                Promo Code
                                                            </td>
                                                            <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                                -$10.00
                                                            </td>
                                                        </tr>
                                                        <!-- 4 -->
                                                        <tr class="border-t-2 border-solid border-slate-500/60">
                                                            <td class="p-3 text-base text-gray-200 whitespace-nowrap font-medium">
                                                                Total
                                                            </td>
                                                            <td class="p-3 text-base font-medium text-gray-100 whitespace-nowrap">
                                                                $202.00
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="flex gap-4 mb-4">
                                            <button class="px-3 py-2 lg:px-4 bg-brand-500 collapse:bg-green-100 text-white text-sm font-semibold rounded hover:bg-brand-600 hover:text-white w-1/2 mt-4 lg:mb-0 inline-block">Continue
                                                shopping</button>
                                            <button class="px-3 py-2 lg:px-4 bg-brand-500 collapse:bg-green-100 text-white text-sm font-semibold rounded hover:bg-brand-600 hover:text-white w-1/2 mt-4 lg:mb-0 inline-block">Back
                                                to cart</button>
                                        </div>
                                        <p class="text-[11px] text-slate-400"> <span class="text-slate-200">Note
                                                :</span> It is a long established fact that a reader will be distracted
                                            by the readable content of a page when looking at its layout.</p>
                                    </div>
                                </div><!--end card-body-->
                            </div>
                        </div><!--end col-->
                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-8 ">
                            <div class="bg-white border border-slate-200  rounded-md w-full relative mb-4">
                                <div class="border-b border-slate-200 py-3 px-4">
                                    <h4 class="font-medium">Delivery Address</h4>
                                </div><!--end header-title-->
                                <div class="flex-auto p-4">
                                    <div class="grid grid-cols-4 gap-4">
                                        <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                            <div class="mb-2">
                                                <label for="First_Name" class="font-medium text-sm text-slate-600">First
                                                    Name<small class="text-red-600 text-sm">*</small></label>
                                                <input class="form-input w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 " placeholder="First name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                            <div class="mb-2">
                                                <label for="Last_name" class="font-medium text-sm text-slate-600">Last
                                                    Name<small class="text-red-600 text-sm">*</small></label>
                                                <input class="form-input w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 " placeholder="Last name" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-4 gap-4">
                                        <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                            <div class="mb-2">
                                                <label for="Delivery_Address" class="font-medium text-sm text-slate-600">Delivery
                                                    Address<small class="text-red-600 text-sm">*</small></label>
                                                <input class="form-input w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 " placeholder="Address" type="text">
                                            </div>
                                        </div>
                                        <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                            <div class="mb-2">
                                                <label for="Address" class="font-medium text-sm text-slate-600">Address</label>
                                                <input class="form-input w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 " placeholder="Address" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-4">
                                        <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                            <div class="mb-2">
                                                <label for="City" class="font-medium text-sm text-slate-600">City<small class="text-red-600 text-sm">*</small></label>
                                                <select id="City" class="w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 ">
                                                    <option class="dark:text-slate-700">-- select --</option>
                                                    <option class="dark:text-slate-700">Surat</option>
                                                    <option class="dark:text-slate-700">New York</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                            <div class="mb-2">
                                                <label for="State" class="font-medium text-sm text-slate-600">State<small class="text-red-600 text-sm">*</small></label>
                                                <select id="State" class="w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 ">
                                                    <option class="dark:text-slate-700">-- select --</option>
                                                    <option class="dark:text-slate-700">Gujarat</option>
                                                    <option class="dark:text-slate-700">California</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                            <div class="mb-2">
                                                <label for="Country" class="font-medium text-sm text-slate-600">Country<small class="text-red-600 text-sm">*</small></label>
                                                <select id="Country" class="w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 ">
                                                    <option class="dark:text-slate-700">-- select --</option>
                                                    <option class="dark:text-slate-700">India</option>
                                                    <option class="dark:text-slate-700">USA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-4 gap-4">
                                        <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                            <div class="mb-2">
                                                <label for="Zip_code" class="font-medium text-sm text-slate-600">Zip
                                                    code<small class="text-red-600 text-sm">*</small></label>
                                                <input class="form-input w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 " placeholder="------" type="text">
                                            </div>
                                        </div>
                                        <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                            <div class="mb-2">
                                                <label for="Email_Address" class="font-medium text-sm text-slate-600">Email
                                                    Address</label>
                                                <input class="form-input w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 " placeholder="Enter Email" type="text">
                                            </div>
                                        </div>
                                        <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                            <div class="mb-2">
                                                <label for="Mobile_No" class="font-medium text-sm text-slate-600">Mobile
                                                    No<small class="text-red-600 text-sm">*</small></label>
                                                <input class="form-input w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 " placeholder="Mobile no" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <label class="flex">
                                        <input type="checkbox" class="accent-brand-500">
                                        <span for="default-checkbox" class="ms-1 text-sm font-medium text-slate-600">Confirm
                                            Shipping Address</span>
                                    </label>
                                    <div class="mt-3">
                                        <button class="inline-block focus:outline-none text-white hover:bg-brand-500 hover:text-white bg-brand-500 border border-gray-200 text-sm font-medium py-1 px-3 rounded">Save</button>
                                        <button class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200  text-sm font-medium py-1 px-3 rounded">Cancle</button>
                                    </div>
                                </div><!--end card-body-->
                            </div> <!--end card-->
                            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                                <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                                    <div class="bg-white border border-slate-200  rounded-md w-full relative">
                                        <div class="flex-auto p-4">
                                            <div class="flex items-center mb-4">
                                                <img src="assets/images/logos/card-2.png" alt="" class="mr-2 h-8 inline-block">
                                                <div class="self-center">
                                                    <span class="block  font-medium text-slate-700">Master Card</span>
                                                    <h5 class="text-xs font-medium text-slate-500">
                                                        Last time used: 21 march 2023</h5>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-3 gap-4">
                                                <div class="col-span-3 md:col-span-3 lg:col-span-3 xl:col-span-3">
                                                    <div class="mb-2">
                                                        <label for="Card_name" class="font-medium text-sm text-slate-600">Name
                                                            of card :</label>
                                                        <input class="form-input w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 " placeholder="Nmae" type="text">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="Zip_code" class="font-medium text-sm text-slate-600">Card
                                                            No :</label>
                                                        <input class="form-input w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 " placeholder="---- ---- ----" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-3 gap-4">
                                                <div class="col-span-3 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                                    <div class="mb-2">
                                                        <label for="Expiry_Month" class="font-medium text-sm text-slate-600">Expiry
                                                            Month</label>
                                                        <select id="Expiry_Month" class="w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 ">
                                                            <option class="dark:text-slate-700">-- select --</option>
                                                            <option class="dark:text-slate-700">01</option>
                                                            <option class="dark:text-slate-700">02</option>
                                                            <option class="dark:text-slate-700">03</option>
                                                            <option class="dark:text-slate-700">04</option>
                                                            <option class="dark:text-slate-700">05</option>
                                                            <option class="dark:text-slate-700">06</option>
                                                            <option class="dark:text-slate-700">07</option>
                                                            <option class="dark:text-slate-700">08</option>
                                                            <option class="dark:text-slate-700">09</option>
                                                            <option class="dark:text-slate-700">10</option>
                                                            <option class="dark:text-slate-700">11</option>
                                                            <option class="dark:text-slate-700">12</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-span-3 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                                    <div class="mb-2">
                                                        <label for="Expiry_Year" class="font-medium text-sm text-slate-600">Expiry
                                                            Year</label>
                                                        <select id="Expiry_Year" class="w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 ">
                                                            <option class="dark:text-slate-700">-- select --</option>
                                                            <option class="dark:text-slate-700">2024</option>
                                                            <option class="dark:text-slate-700">2025</option>
                                                            <option class="dark:text-slate-700">2026</option>
                                                            <option class="dark:text-slate-700">2027</option>
                                                            <option class="dark:text-slate-700">2028</option>
                                                            <option class="dark:text-slate-700">2029</option>
                                                            <option class="dark:text-slate-700">2030</option>
                                                            <option class="dark:text-slate-700">2031</option>
                                                            <option class="dark:text-slate-700">2032</option>
                                                            <option class="dark:text-slate-700">2033</option>
                                                            <option class="dark:text-slate-700">2034</option>
                                                            <option class="dark:text-slate-700">2035</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-span-3 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                                    <div class="mb-2">
                                                        <label for="CVV" class="font-medium text-sm text-slate-600">CVV</label>
                                                        <input class="form-input w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 " placeholder="cvv" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500 w-full">Confirm
                                                payment $202.00</button>
                                        </div><!--end card-body-->
                                    </div> <!--end card-->
                                </div><!--end col-->
                                <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                                    <div class="bg-white border border-slate-200  rounded-md w-full relative">
                                        <div class="flex-auto p-4">
                                            <div class="flex items-center mb-4">
                                                <img src="assets/images/logos/card-1.png" alt="" class="mr-2 h-8 inline-block">
                                                <div class="self-center">
                                                    <span class="block  font-medium text-slate-700">Visa Card</span>
                                                    <h5 class="text-xs font-medium text-slate-500">
                                                        Last time used: 21 march 2023</h5>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-3 gap-4">
                                                <div class="col-span-3 md:col-span-3 lg:col-span-3 xl:col-span-3">
                                                    <div class="mb-2">
                                                        <label for="Card_name" class="font-medium text-sm text-slate-600">Name
                                                            of card :</label>
                                                        <input class="form-input w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 " placeholder="Nmae" type="text">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="Zip_code" class="font-medium text-sm text-slate-600">Card
                                                            No :</label>
                                                        <input class="form-input w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 " placeholder="---- ---- ----" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-3 gap-4">
                                                <div class="col-span-3 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                                    <div class="mb-2">
                                                        <label for="Expiry_Month" class="font-medium text-sm text-slate-600">Expiry
                                                            Month</label>
                                                        <select id="Expiry_Month" class="w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 ">
                                                            <option class="dark:text-slate-700">-- select --</option>
                                                            <option class="dark:text-slate-700">01</option>
                                                            <option class="dark:text-slate-700">02</option>
                                                            <option class="dark:text-slate-700">03</option>
                                                            <option class="dark:text-slate-700">04</option>
                                                            <option class="dark:text-slate-700">05</option>
                                                            <option class="dark:text-slate-700">06</option>
                                                            <option class="dark:text-slate-700">07</option>
                                                            <option class="dark:text-slate-700">08</option>
                                                            <option class="dark:text-slate-700">09</option>
                                                            <option class="dark:text-slate-700">10</option>
                                                            <option class="dark:text-slate-700">11</option>
                                                            <option class="dark:text-slate-700">12</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-span-3 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                                    <div class="mb-2">
                                                        <label for="Expiry_Year" class="font-medium text-sm text-slate-600">Expiry
                                                            Year</label>
                                                        <select id="Expiry_Year" class="w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 ">
                                                            <option class="dark:text-slate-700">-- select --</option>
                                                            <option class="dark:text-slate-700">2024</option>
                                                            <option class="dark:text-slate-700">2025</option>
                                                            <option class="dark:text-slate-700">2026</option>
                                                            <option class="dark:text-slate-700">2027</option>
                                                            <option class="dark:text-slate-700">2028</option>
                                                            <option class="dark:text-slate-700">2029</option>
                                                            <option class="dark:text-slate-700">2030</option>
                                                            <option class="dark:text-slate-700">2031</option>
                                                            <option class="dark:text-slate-700">2032</option>
                                                            <option class="dark:text-slate-700">2033</option>
                                                            <option class="dark:text-slate-700">2034</option>
                                                            <option class="dark:text-slate-700">2035</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-span-3 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                                    <div class="mb-2">
                                                        <label for="CVV" class="font-medium text-sm text-slate-600">CVV</label>
                                                        <input class="form-input w-full rounded-md mt-1 border border-slate-300/60 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 " placeholder="cvv" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500 w-full">Confirm
                                                payment $202.00</button>
                                        </div><!--end card-body-->
                                    </div> <!--end card-->
                                </div><!--end col-->
                            </div><!--end inner-grid-->
                        </div><!--end col-->
                    </div><!--end inner-grid-->
                </div><!--end container-->



            </div><!--end main-->
        </div><!--end page-wrapper-->
    </div><!--end div-->


    <!-- JAVASCRIPTS -->
    <!-- <div class="menu-overlay"></div> -->
    <script src="{{ asset('design-system/assets/libs/lucide/umd/lucide.min.js') }}"></script>
    <script src="{{ asset('design-system/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('design-system/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('design-system/assets/libs/@frostui/tailwindcss/frostui.js') }}"></script>

    <script src="{{ asset('design-system/assets/libs/nice-select2/js/nice-select2.js') }}"></script>
    <script src="{{ asset('design-system/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('design-system/assets/js/app.js') }}"></script>
    <script>
        NiceSelect.bind(document.querySelector(".nice-select"));
        var swiper = new Swiper(".defaultSwiper", {
            autoplay: {
                delay: 3500,
                disableOnInteraction: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <!-- JAVASCRIPTS -->
</body>

</html>