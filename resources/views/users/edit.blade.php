<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Edit User</title>
</head>
<body class="bg-gray-100">
    <form action="{{ route('users.update', $user->id) }}" method="POST" class="px-4 my-32 max-w-3xl mx-auto space-y-6">  
    @csrf
    @method('PUT')
        <h1 class="text-3xl font-semibold">Edit User</h1>
        <div>
            <label for="">Nama</label>
            <input type="text" name="name" placeholder="Nama" value="{{ $user->name }}" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none focus:border-cyan-500">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Email" value="{{ $user->email }}" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none focus:border-cyan-500">
        </div>
        <div>
            <input type="submit" value="Simpan" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none focus:border-cyan-500">
        </div>
    </form>
    
</body>
</html>
