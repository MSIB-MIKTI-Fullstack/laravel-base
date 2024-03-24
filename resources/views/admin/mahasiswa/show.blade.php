@push('breadcrumb')
  <div class="flex flex-wrap justify-between">
    <div class="items-center ">
      <h1 class="font-medium text-3xl block dark:text-slate-100">Detail Mahasiswa</h1>
      <ol class="list-reset flex text-sm">
        <li><a href="#" class="text-gray-500 dark:text-slate-400">Master Data</a></li>
        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
        <li class="text-gray-500 dark:text-slate-400">Mahasiswa</li>
        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
        <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Detail Mahasiswa</li>
      </ol>
    </div>
    <div class="flex items-center">
      <a href="{{ route('admin.mahasiswa.index') }}">
        <button type="button"
          class="mt-6 mr-1 px-2 py-1 lg:px-4 bg-transparent text-primary text-sm rounded transition hover:bg-primary-500 hover:text-white border border-primary font-medium">Kembali</button>
      </a>
    </div>
  </div>
@endpush

<x-admin.app title="Mahasiswa">

  <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
    <div class="flex-auto p-4 text-center">
      <img src="/design-system/assets/images/users/avatar-1.png" alt=""
        class="h-16 inline-block rounded-full mb-4">
      <h5 class="text-lg font-semibold text-slate-700 dark:text-gray-400 leading-3">{{ $mahasiswa->nama }} </h5>
      <span class="text-slate-500 text-sm">Mahasiswa</span>
      <div class="mt-0 mb-2">
        <p class="text-sm text-slate-500 font-medium block"><span class="text-slate-700 dark:text-slate-400"><i
              class="ti ti-phone text-lg text-slate-500"></i> NIM :</span> {{ $mahasiswa->nim }}</p>
        <p class="text-sm text-slate-500 font-medium block"><span class="text-slate-700 dark:text-slate-400"><i
              class="ti ti-mail text-lg text-slate-500"></i> Jurusan :</span> {{ $mahasiswa->jurusan }}</p>
      </div>
      <button
        class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded">KHS</button>
      <button
        class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded">Transkrip</button>

    </div>
  </div>

</x-admin.app>
