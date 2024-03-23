<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
    @vite('resources/css/app.css')
</head>
<body class="flex justify-center items-center min-h-screen bg-slate-300">
    <div class="max-w-md w-full shadow-md rounded bg-white p-8 ">
        <h1 class="text-2xl mb-6">Edit User</h1>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" value="{{ $user->name }}" class="border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:border-emerald-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" value="{{ $user->email }}" class="border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:border-emerald-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" class="border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:border-emerald-500">
            </div>
            <button type="submit" class="text-white px-4 py-2 rounded bg-emerald-500 hover:bg-emerald-600">Submit</button>
        </form>
    </div>
</body>
</html>