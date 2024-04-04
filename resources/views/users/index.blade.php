@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Daftar Pengguna</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary mb-2">Tambahkan Pengguna Baru</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Alamat Email</th>
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
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <h1>Ini konten dari index users</h1>
@endsection