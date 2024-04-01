<!-- resources/views/users/index.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Daftar Pengguna</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary mb-2">Tambah Pengguna</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <!-- Tambahkan tombol hapus jika diperlukan -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
