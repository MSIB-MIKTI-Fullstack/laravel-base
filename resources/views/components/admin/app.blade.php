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
  <link href="/design-system/assets/libs/prismjs/themes/prism-twilight.min.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="/design-system/assets/libs/simple-datatables/style.css">

  <!-- Main Css -->
  <link rel="stylesheet" href="/design-system/assets/libs/icofont/icofont.min.css">
  <link href="/design-system/assets/libs/flatpickr/flatpickr.min.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="/design-system/assets/css/tailwind.min.css">

  {{-- Custom CSS --}}
  <link rel="stylesheet" href="/css/admin/main.css">

  {{-- Inline CSS --}}
  @stack('style')

</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical"class="bg-[#EEF0FC] dark:bg-gray-900">

  <!-- leftbar-tab-menu -->
  <x-admin.sidebar />

  {{-- topbar --}}
  <x-admin.topbar />

  <div class="ltr:flex flex-1 rtl:flex-row-reverse">
    <div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
      <div class="xl:w-full">
        <div class="flex flex-wrap">
          <div class="flex items-center py-4 w-full">
            <div class="w-full">
              <div class="">
                @stack('breadcrumb')
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="xl:w-full  min-h-[calc(100vh-152px)] relative pb-14">
        {{-- <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4"></div> --}}

        {{-- Code Here --}}
        {{ $slot }}

        <!-- footer -->
        <div class="absolute bottom-0 -left-4 -right-4 block print:hidden border-t p-4 h-[52px] dark:border-slate-700/40">
          <div class="container">
            <!-- Footer Start -->
            <footer class="footer bg-transparent  text-center  font-medium text-slate-600 dark:text-slate-400 md:text-left ">
              &copy;
              <script>
                var year = new Date();
                document.write(year.getFullYear());
              </script>
              Robotech
              <span class="float-right hidden text-slate-600 dark:text-slate-400 md:inline-block">Crafted with <i class="ti ti-heart text-red-500"></i> by Mannatthemes</span>
            </footer>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JAVASCRIPTS -->
  <!-- <div class="menu-overlay"></div> -->
  <script src="/design-system/assets/libs/lucide/umd/lucide.min.js"></script>
  <script src="/design-system/assets/libs/simplebar/simplebar.min.js"></script>
  <script src="/design-system/assets/libs/flatpickr/flatpickr.min.js"></script>
  <script src="/design-system/assets/libs/@frostui/tailwindcss/frostui.js"></script>

  <script src="/design-system/assets/js/pages/analytics-index.init.js"></script>

  <script src="/design-system/assets/libs/simple-datatables/umd/simple-datatables.js"></script>
  <script src="/design-system/assets/libs/prismjs/prism.js"></script>
  <script src="/design-system/assets/js/app.js"></script>

  {{-- Custom JS --}}
  <script src="/js/admin/main.js"></script>

  {{-- Inline JS --}}
  @stack('script')
</body>

</html>
