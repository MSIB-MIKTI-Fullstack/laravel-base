<!-- resources/views/barangs/edit.blade.php -->
@extends('crud.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Barang</div>

                <div class="card-body">
                    <form action="{{ route('crud.update',$barang->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang:</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga:</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="{{ $barang->harga }}">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok:</label>
                            <input type="text" class="form-control" id="stok" name="stok" value="{{ $barang->stok }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
