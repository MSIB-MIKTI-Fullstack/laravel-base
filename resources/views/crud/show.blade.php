<!-- resources/views/barangs/show.blade.php -->
@extends('crud.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detail Barang</div>

                <div class="card-body">
                    <p><strong>Nama Barang:</strong> {{ $barang->nama_barang }}</p>
                    <p><strong>Harga:</strong> {{ $barang->harga }}</p>
                    <p><strong>Stok:</strong> {{ $barang->stok }}</p>
                    <a href="{{ route('crud.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
