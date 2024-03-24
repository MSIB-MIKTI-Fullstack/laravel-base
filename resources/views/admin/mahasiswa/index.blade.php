@push('breadcrumb')
  <div class="flex flex-wrap justify-between">
    <div class="items-center ">
      <h1 class="font-medium text-3xl block dark:text-slate-100">Mahasiswa</h1>
      <ol class="list-reset flex text-sm">
        <li><a href="#" class="text-gray-500 dark:text-slate-400">Dashboard</a></li>
        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
        <li class="text-gray-500 dark:text-slate-400">Master Data</li>
        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
        <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Mahasiswa</li>
      </ol>
    </div>
    <div class="flex items-center">
      <a href="{{ route('admin.mahasiswa.create') }}">
        <button type="button"
          class="mt-6 mr-1 px-2 py-1 lg:px-4 bg-transparent text-primary text-sm rounded transition hover:bg-primary-500 hover:text-white border border-primary font-medium">Tambah
          Data</button>
      </a>
    </div>
  </div>
@endpush

<x-admin.app title="Mahasiswa">

  @if (session('success'))
    <div class="flex p-3 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
      <i class="fas fa-check flex-shrink-0 text-green-700 self-center"></i>
      <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
        {{ session('success') }}
      </div>
      <button type="button"
        class="justify-center items-center ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300 alert-hidden">

        <i class="icofont-close"></i>
      </button>
    </div>
  @endif

  <div class="sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-6 xl:col-start-4 ">
    <div
      class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative mb-4">
      <div class="grid grid-cols-1 p-4 py-0">
        <div class="sm:-mx-6 lg:-mx-8">
          <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
            <table class="w-full border-collapse" id="datatable_1">
              <thead class="bg-slate-100 dark:bg-slate-700/20">
                <tr>
                  <th class="uppercase">No</th>
                  <th class="uppercase">NIM</th>
                  <th class="uppercase">Nama</th>
                  <th class="uppercase">Jurusan</th>
                  <th class="uppercase">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                  <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->jurusan }}</td>
                    <td>
                      <a href="{{ route('admin.mahasiswa.show', ['mahasiswa' => $mahasiswa->id]) }}">
                        <button
                          class="px-2 py-1 lg:px-4 bg-primary  text-white text-sm  rounded hover:bg-primary-600 border border-primary-500">
                          <i class="fas fa-search"></i>
                        </button>
                      </a>
                      <a href="{{ route('admin.mahasiswa.edit', ['mahasiswa' => $mahasiswa->id]) }}">
                        <button
                          class="px-2 py-1 lg:px-4 bg-yellow  text-white text-sm  rounded hover:bg-yellow-600 border border-yellow-500">
                          <i class="fas fa-pencil-alt"></i>
                        </button>
                      </a>
                      <form action="{{ route('admin.mahasiswa.destroy', ['mahasiswa' => $mahasiswa->id]) }}"
                        class="inline" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah anda yakin?')"
                          class="px-2 py-1 lg:px-4 bg-red  text-white text-sm  rounded hover:bg-red-600 border border-red-500">
                          <i class="fas fa-trash-alt"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-admin.app>
