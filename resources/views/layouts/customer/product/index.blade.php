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
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical"
    class="bg-[#EEF0FC] dark:bg-gray-900">

    <!-- leftbar-tab-menu -->
    <header class="relative z-40 w-full bg-white print:hidden">
        <div>
            <div class="container mx-auto">
                <div class="relative -mx-4 flex items-center justify-between">
                    <div class="w-full max-w-full px-4 lg:w-60">
                        <div class="relative py-4 group categories">
                            <a href="javascript:void(0)"
                                class="inline-flex  relative items-center justify-between whitespace-nowrap rounded bg-brand-50/70 px-5 py-2 text-base font-medium text-brand-500 hover:bg-opacity-90">
                                <span class="pe-2">
                                    <i data-lucide="menu" class="h-5 w-5"></i>
                                </span>
                                All categories
                            </a>

                            <div
                                class="absolute left-0 top-[100%] z-10 w-[250px] rounded-lg border-[.5px] dark:border-slate-700/40 bg-white py-4   duration-400 group-[.categories]:group-hover:block  hidden">
                                <span
                                    class="absolute -top-[6px] left-6 -z-10 hidden h-3 w-3 rotate-45 rounded-sm border-[.5px] border-r-0 border-b-0 dark:border-slate-700/40 bg-white lg:block"></span>

                                <div class="group submenu relative px-6">
                                    <a href="javascript:void(0)"
                                        class="flex items-center justify-between rounded py-2 text-sm font-medium text-body-color hover:text-brand group-hover:text-brand">
                                        Fashion
                                        <span>
                                            <i data-lucide="chevron-right" class="h-4"></i>
                                        </span>
                                    </a>

                                    <div
                                        class="left-full top-0 dark:border-slate-700/40 bg-white py-2 group-[.submenu]:group-hover:visible group-[.submenu]:group-hover:opacity-100 lg:invisible lg:absolute lg:w-[600px] lg:rounded lg:border-[.5px] lg:py-8 lg:px-8 lg:opacity-0 xl:w-[650px] block">
                                        <div class="-mx-2 flex flex-wrap">
                                            <div class="w-full px-2 lg:w-1/3">
                                                <div>
                                                    <h3 class="mb-3 text-base font-semibold text-black uppercase">
                                                        Man
                                                    </h3>
                                                    <a href="#"
                                                        class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        Cargo Pants
                                                    </a>
                                                    <a href="#"
                                                        class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        Jackets
                                                    </a>
                                                    <a href="#"
                                                        class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        T-Shirts
                                                    </a>
                                                    <a href="#"
                                                        class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        Shirts
                                                    </a>
                                                    <a href="#"
                                                        class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        Jeans
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="w-full px-2 lg:w-1/3">
                                                <div>
                                                    <h3 class="mb-3 text-base font-semibold text-black uppercase">
                                                        Woman
                                                    </h3>
                                                    <a href="#"
                                                        class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        Dresses
                                                    </a>
                                                    <a href="#"
                                                        class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        Tees
                                                    </a>
                                                    <a href="#"
                                                        class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        Leggings
                                                    </a>
                                                    <a href="#"
                                                        class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        Wedding Dresses
                                                    </a>
                                                    <a href="#"
                                                        class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                        Prom Dresses
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="w-full px-2 lg:w-1/3">
                                                <h3 class="mb-3 text-base font-semibold text-black uppercase">
                                                    Kids
                                                </h3>
                                                <a href="#"
                                                    class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    Body Wash
                                                </a>
                                                <a href="#"
                                                    class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    Nightwear
                                                </a>
                                                <a href="#"
                                                    class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    Shorts
                                                </a>
                                                <a href="#"
                                                    class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    Sunglasses
                                                </a>
                                                <a href="#"
                                                    class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    Summer Caps
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-6">
                                    <a href="#"
                                        class="flex items-center justify-between rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                        Phone & Smartwatch
                                    </a>
                                </div>
                                <div class="px-6">
                                    <a href="#"
                                        class="flex items-center justify-between rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                        Laptops
                                    </a>
                                </div>
                                <div class="px-6">
                                    <a href="#"
                                        class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                        Jewelry
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-full items-center justify-between px-4">
                        <div class="w-full">
                            <button data-collapse-toggle="mobile-menu-2" type="button" id="toggle-menu"
                                class=" block ms-auto h-10 w-10 leading-10 border rounded-full  ring-brand focus:ring-1 lg:hidden"
                                aria-controls="mobile-menu-2" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <i data-lucide="menu" class="w-5 h-5 mx-auto stroke-slate-600 "></i>
                                <i data-lucide="x" class="w-5 h-5 hidden mx-auto stroke-slate-600 "></i>
                            </button>
                            <nav id="mobile-menu-2"
                                class="order-2 hidden w-full items-center justify-between md:order-1 md:ms-5 lg:flex md:w-auto">
                                <ul class="blcok items-center lg:flex px-4 md:px-0">
                                    <li>
                                        <a href="customers-home.html"
                                            class="flex justify-between py-2 text-base font-medium text-dark hover:text-brand lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="customers-products.html"
                                            class="flex justify-between py-2 text-base font-medium text-dark hover:text-brand lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6">
                                            Products
                                        </a>
                                    </li>
                                    <li>
                                        <a href="customers-wishlist.html"
                                            class="flex justify-between py-2 text-base font-medium text-dark hover:text-brand lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6">
                                            Wishlist
                                        </a>
                                    </li>
                                    <li>
                                        <a href="customers-stores.html"
                                            class="flex justify-between py-2 text-base font-medium text-dark hover:text-brand lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6">
                                            Stores
                                        </a>
                                    </li>
                                    <li>
                                        <a href="customers-checkout.html"
                                            class="flex justify-between py-2 text-base font-medium text-dark hover:text-brand lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6">
                                            Checkout
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="w-full max-w-full hidden lg:flex px-4 lg:w-[300px] xl:w-72 items-center">
                        <h5 class="text-xl font-semibold uppercase text-brand-500 flex items-center"><i
                                class="icofont-sale-discount me-1 text-4xl"></i>up to <span
                                class="text-xxl text-pink-500 font-bold">70%</span> off</h5>
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
                        @yield('content')
                        <div class="sm:col-span-8  md:col-span-8 lg:col-span-8 xl:col-span-8 ">

                            <div
                                class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative mb-4 p-3">

                                <div class="relative overflow-x-auto">
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="px-6 py-3">No</th>
                                                <th scope="col" class="px-6 py-3">Gambar</th>
                                                <th scope="col" class="px-6 py-3">Nama Produk</th>
                                                <th scope="col" class="px-6 py-3">Harga</th>
                                                <th scope="col" class="px-6 py-3">Deksripsi</th>
                                                <th scope="col" class="px-6 py-3">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($records as $i => $r)
                                                <tr>
                                                    <td class="px-6 py-3">{{ $i += 1 }}</td>
                                                    <td class="px-6 py-3">
                                                        <img src="{{ $r->product_image }}" alt=""
                                                            width="150px">
                                                    </td>
                                                    <td class="px-6 py-3">{{ $r->product_name }}</td>
                                                    <td class="px-6 py-3">Rp{{ number_format($r->product_price) }}
                                                    </td>
                                                    <td class="px-6 py-3">{{ $r->product_desc }}</td>
                                                    <td class="px-6 py-3">
                                                        <form action="{{ route('products.destroy', $r->id) }}"
                                                            method="POST">

                                                            <a href="{{ route('products.edit', $r->id) }}"
                                                                class="inline-block focus:outline-none text-white hover:bg-brand-500 hover:text-white bg-orange-500 border border-gray-200 text-sm font-medium py-1 px-3 rounded">Edit</a>

                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit"
                                                                class="inline-block focus:outline-none text-white hover:bg-brand-500 hover:text-white bg-red-500 border border-gray-200 text-sm font-medium py-1 px-3 rounded">Hapus</button>

                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>



                            </div>
                        </div><!--end col-->
                    </div><!--end inner-grid-->
                </div><!--end container-->
                <!-- footer -->
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
