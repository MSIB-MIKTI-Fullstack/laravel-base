<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">

<head>
  <meta charset="utf-8" />
  <title>{{ $title ?? 'Robotech - Admin & Dashboard Template' }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="" name="Mannatthemes" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="/design-system/assets/images/favicon.ico" />

  <!-- Css -->
  <link rel="stylesheet" href="/design-system/assets/libs/nice-select2/css/nice-select2.css">
  <link rel="stylesheet" href="/design-system/assets/libs/swiper/swiper-bundle.min.css">
  <!-- Main Css -->
  <link rel="stylesheet" href="/design-system/assets/libs/icofont/icofont.min.css">
  <link href="/design-system/assets/libs/flatpickr/flatpickr.min.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="/design-system/assets/css/tailwind.min.css">

  {{-- Inline CSS --}}
  @stack('style')

</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical"
  class="bg-[#EEF0FC] dark:bg-gray-900">

  <!-- leftbar-tab-menu -->
  <x-customer.header />

  <div class="ltr:flex flex-1 rtl:flex-row-reverse">
    <div class="page-wrapper relative  duration-300 pt-0 w-full">
      <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0">

        {{ $slot }}

        <!-- footer -->
        <div
          class="relative bottom-0 -left-0 -right-0 block print:hidden border-t p-4 bg-black dark:border-slate-700/40">
          <div class="container">
            <!-- Footer Start -->
            <div class="grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4 pt-10">
              <div class="w-full relative mb-4">
                <div class="flex-auto p-4">
                  <div class="mb-5">
                    <a href="customers-home.html">
                      <img src="/design-system/assets/images/logo-sm.png" alt="" class="h-8 inline-block me-3">
                      <img src="/design-system/assets/images/logo.png" alt="" class="h-8 inline-block">
                    </a>
                  </div>
                  <p class="text-slate-500 text-lg">It is a long established fact that a reader will be distracted by
                    the readable content of a page when looking at its layout. </p>
                </div><!--end card-body-->
              </div> <!--end card-->
              <div class="w-full relative mb-4">
                <div class="flex-auto p-4">
                  <h5 class="text-xl font-semibold text-slate-300 mb-6">Customers</h5>
                  <ul class="list-none footer-links">
                    <li class="mb-2">
                      <a href="#"
                        class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Home</a>
                    </li>
                    <li class="mb-2">
                      <a href="#"
                        class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Product
                        details</a>
                    </li>
                    <li class="mb-2">
                      <a href="#"
                        class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Cart</a>
                    </li>
                    <li class="mb-2">
                      <a href="#"
                        class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Checkout</a>
                    </li>
                    <li class="mb-2">
                      <a href="#"
                        class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Wishlist</a>
                    </li>
                    <li class="mb-2">
                      <a href="#"
                        class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Invoice</a>
                    </li>
                  </ul>
                </div><!--end card-body-->
              </div> <!--end card-->
              <div class="w-full relative mb-4">
                <div class="flex-auto p-4">
                  <h5 class="text-xl font-semibold text-slate-300 mb-6">Admin</h5>
                  <ul class="list-none footer-links">
                    <li class="mb-2">
                      <a href="#"
                        class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Dashboard</a>
                    </li>
                    <li class="mb-2">
                      <a href="#"
                        class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Add
                        product</a>
                    </li>
                    <li class="mb-2">
                      <a href="#"
                        class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Orders</a>
                    </li>
                    <li class="mb-2">
                      <a href="#"
                        class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Customers</a>
                    </li>
                    <li class="mb-2">
                      <a href="#"
                        class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Order
                        details</a>
                    </li>
                    <li class="mb-2">
                      <a href="#"
                        class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Refund</a>
                    </li>
                  </ul>
                </div><!--end card-body-->
              </div> <!--end card-->
              <div class="w-full relative mb-4">
                <div class="flex-auto p-4">
                  <h5 class="text-xl font-semibold text-slate-300 mb-6 sm:text-center xl:text-left">Contact Us</h5>
                  <div class="mb-5">
                    <p class="text-slate-400 font-semibold">1884 George Avenue<br>
                      Mobile, AL 36603
                    </p>
                  </div>
                  <div class="flex sm:justify-center xl:justify-start">
                    <a href=""
                      class="w-8 h-8 leading-7 border-2 border-gray-500 rounded-full text-center duration-300 text-gray-400 hover:text-white hover:bg-blue-600 hover:border-blue-600">
                      <i class="icofont-facebook"></i>
                    </a>
                    <a href=""
                      class="w-8 h-8 leading-7 border-2 border-gray-500 rounded-full text-center duration-300 ml-2 text-gray-400 hover:text-white hover:bg-blue-400 hover:border-blue-400">
                      <i class="icofont-twitter"></i>
                    </a>
                    <a href=""
                      class="w-8 h-8 leading-7 border-2 border-gray-500 rounded-full text-center duration-300 ml-2 text-gray-400 hover:text-white hover:bg-red-600 hover:border-red-600">
                      <i class="icofont-google-plus"></i>
                    </a>
                  </div>
                </div><!--end card-body-->
              </div> <!--end card-->
            </div>
            <footer
              class="footer bg-transparent  text-center  font-medium text-slate-400 dark:text-slate-400 md:text-left ">
              &copy;
              <script>
                var year = new Date();
                document.write(year.getFullYear());
              </script>
              Robotech
              <span class="float-right hidden text-slate-400 dark:text-slate-400 md:inline-block">Crafted with <i
                  class="ti ti-heart text-red-500"></i> by
                Mannatthemes</span>
            </footer>
            <!-- end Footer -->
          </div>
        </div>


      </div><!--end main-->
    </div><!--end page-wrapper-->
  </div><!--end div-->


  <!-- JAVASCRIPTS -->
  <!-- <div class="menu-overlay"></div> -->
  <script src="/design-system/assets/libs/lucide/umd/lucide.min.js"></script>
  <script src="/design-system/assets/libs/simplebar/simplebar.min.js"></script>
  <script src="/design-system/assets/libs/flatpickr/flatpickr.min.js"></script>
  <script src="/design-system/assets/libs/@frostui/tailwindcss/frostui.js"></script>

  <script src="/design-system/assets/libs/nice-select2/js/nice-select2.js"></script>
  <script src="/design-system/assets/libs/swiper/swiper-bundle.min.js"></script>
  <script src="/design-system/assets/js/app.js"></script>
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

    const range = document.querySelectorAll(".range-slider span input");
    progress = document.querySelector(".range-slider .progress");
    let gap = 0.1;
    const inputValue = document.querySelectorAll(".numberVal input");

    range.forEach((input) => {
      input.addEventListener("input", (e) => {
        let minRange = parseInt(range[0].value);
        let maxRange = parseInt(range[1].value);

        if (maxRange - minRange < gap) {
          if (e.target.className === "range-min") {
            range[0].value = maxRange - gap;
          } else {
            range[1].value = minRange + gap;
          }
        } else {
          progress.style.left = (minRange / range[0].max) * 100 + "%";
          progress.style.right = 100 - (maxRange / range[1].max) * 100 + "%";
          inputValue[0].value = minRange;
          inputValue[1].value = maxRange;
        }
      });
    });
  </script>
  <!-- JAVASCRIPTS -->

  {{-- Inline JS --}}
  @stack('script')
</body>

</html>
