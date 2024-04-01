<!-- resources/views/users/create.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Tambah Pengguna Baru</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Pasword:</label>
                <input type="pasword" name="pasword" id="pasword" class="form-control">
            </div>
            <!-- Tambahkan input untuk bidang lainnya jika diperlukan -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
