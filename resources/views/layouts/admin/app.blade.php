<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">

<!-- head-->
@include('layouts.admin.component.head')
<!-- /head-->

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical"
    class="bg-[#EEF0FC]">

    <!-- leftbar-tab-menu -->
    @include('layouts.admin.component.leftbar')
    <!-- /leftbar-tab-menu -->

    <!-- navbar -->
    @include('layouts.admin.component.navbar')
    <!-- /navbar -->

    @yield('content')


    <!-- navbar -->
    @include('layouts.admin.component.script')
    <!-- /navbar -->

</body>

</html>
