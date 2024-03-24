@push('breadcrumb')
  <div class="flex flex-wrap justify-between">
    <div class="items-center ">
      <h1 class="font-medium text-3xl block dark:text-slate-100">Edit Data Mahasiswa</h1>
      <ol class="list-reset flex text-sm">
        <li><a href="#" class="text-gray-500 dark:text-slate-400">Master Data</a></li>
        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
        <li class="text-gray-500 dark:text-slate-400">Mahasiswa</li>
        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
        <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Edit Data Mahasiswa</li>
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

  <div class="sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-6 xl:col-start-4 ">
    <div
      class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative mb-4">
      <div class="flex-auto p-4 ">
        <form action="{{ route('admin.mahasiswa.update', ['mahasiswa' => $mahasiswa->id]) }}" method="POST">
          @csrf
          @method('PUT')

          <div class="mb-2">
            <label for="nim" class="font-medium text-sm text-slate-600 dark:text-slate-400">NIM</label>
            <input type="text" id="nim" name="nim" value="{{ old('nim', $mahasiswa->nim) }}"
              class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('nim') }}</p>
          </div>
          <div class="mb-2">
            <label for="nama" class="font-medium text-sm text-slate-600 dark:text-slate-400">Nama</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama', $mahasiswa->nama) }}"
              class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('nama') }}</p>
          </div>
          <div class="mb-2">
            <label for="jurusan" class="font-medium text-sm text-slate-600 dark:text-slate-400">Jurusan</label>
            <input type="text" id="jurusan" name="jurusan" value="{{ old('jurusan', $mahasiswa->jurusan) }}"
              class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('jurusan') }}</p>
          </div>

          <button type="submit"
            class="mt-3 inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded mb-1">Submit</button>
        </form>
      </div>
    </div>
  </div>

</x-admin.app>
