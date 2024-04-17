<div class="min-h-full z-[99]  fixed inset-y-0 print:hidden bg-gradient-to-t from-[#06090f] from-10% via-[#06090f] via-40% to-[#5c3dc3] to-100% main-sidebar duration-300 group-data-[sidebar=dark]:bg-[#06090f] group-data-[sidebar=brand]:bg-brand group-[.dark]:group-data-[sidebar=brand]:bg-[#06090f]">
  <div class=" text-center border-b bg-[#06090f] border-r h-[64px] flex justify-center items-center brand-logo group-data-[sidebar=dark]:bg-[#06090f] group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:bg-brand group-[.dark]:group-data-[sidebar=brand]:bg-[#06090f] group-data-[sidebar=brand]:border-slate-700/40">
    <a href="index.html" class="logo">
      <span>
        <img src="/design-system/assets/images/logo-sm.png" alt="logo-small" class="logo-sm h-8 align-middle inline-block">
      </span>
      <span>
        <img src="/design-system/assets/images/logo.png" alt="logo-large"
          class="logo-lg h-[28px] logo-light hidden ms-1 group-data-[sidebar=dark]:inline-block group-data-[sidebar=brand]:inline-block">
        <img src="/design-system/assets/images/logo.png" alt="logo-large"
          class="logo-lg h-[28px] logo-dark inline-block ms-1 group-data-[sidebar=dark]:hidden group-data-[sidebar=brand]:hidden">
      </span>
    </a>
  </div>
  <div class="border-r pb-14 h-[100vh] group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:border-slate-700/40" data-simplebar>
    <div class="p-4 block">
      <ul class="navbar-nav">
        <li class="uppercase text-[11px]  text-primary-500 mt-0 leading-4 mb-2 group-data-[sidebar=dark]:text-primary-400 group-data-[sidebar=brand]:text-primary-300">
          <span class="text-[9px] text-slate-600 group-data-[sidebar=dark]:text-slate-500 group-data-[sidebar=brand]:text-slate-400">DashboardS & Apps</span>
        </li>
        <li>
          <div id="parent-accordion" data-fc-type="accordion">

            <a href="#" class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200">
              <span data-lucide="home" class="w-5 h-5 text-center text-slate-800 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
              <span>Dashboard</span>
              <i class="icofont-thin-right ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180 "></i>
            </a>

            <a href="#" class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200 " data-fc-type="collapse" data-fc-parent="parent-accordion">
              <span data-lucide="grid" class="w-5 h-5 text-center text-slate-800 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
              <span>Master Data</span>
              <i class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180 "></i>
            </a>
            <div id="Admin-flush" class="hidden  overflow-hidden">
              <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                <li class="nav-item relative block">
                  <a href="{{ route('admin.user.index') }}" class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                    <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                    User
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="{{ route('admin.mahasiswa.index') }}" class="nav-link  hover:text-primary-500  rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                    <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                    Mahasiswa
                  </a>
                </li>
              </ul>
            </div>

            <div class="border-b border-dashed my-3 group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:border-slate-700/40">
            </div>
            <div class="text-[9px] text-slate-600 group-data-[sidebar=dark]:text-slate-500 group-data-[sidebar=brand]:text-slate-400">
              <span>Pengaruran & privasi</span>
            </div>

            <a href="{{ route('logout') }}" class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200">
              <span data-lucide="log-out" class="w-5 h-5 text-center text-slate-800 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
              <span>Logout</span>
              <i class="icofont-thin-right  fc-collapse-open:rotate-180 ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></i>
            </a>

          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
