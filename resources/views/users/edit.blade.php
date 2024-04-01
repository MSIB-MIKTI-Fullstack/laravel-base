<!-- resources/views/users/edit.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit Pengguna</h1>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
            </div>
            <!-- Tambahkan input untuk bidang lainnya jika diperlukan -->
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
