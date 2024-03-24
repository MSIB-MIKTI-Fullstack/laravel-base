<!-- resources/views/barangs/index.blade.php -->
@extends('crud.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <a href="{{ route('crud.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th width="280px">Aksi</th>
                        </tr>
                        @foreach ($barangs as $barang)
                        <tr>
                            <td>{{ $barang->id }}</td>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->harga }}</td>
                            <td>{{ $barang->stok }}</td>
                            <td>
                                <form action="{{ route('crud.destroy',$barang->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('crud.show',$barang->id) }}">Detail</a>
                                    <a class="btn btn-primary" href="{{ route('crud.edit',$barang->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
