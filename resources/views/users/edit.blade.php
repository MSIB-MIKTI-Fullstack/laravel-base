<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto my-4">
        <div class="max-w-xs">
            <form action="{{ route('users.update', $user->id) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                @method('PUT')
                <input type="text" name="name" placeholder="Name" value="{{ $user->name }}" class="w-full border my-2 px-2 rounded"/>
                <input type="text" name="email" placeholder="Email" value="{{ $user->email }}" class="w-full border my-2 px-2 rounded"/>
                <input type="password" name="password" placeholder="Password" class="w-full border my-2 px-2 rounded"/>
                <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-1 px-3 mt-2 rounded">Submit</button>
            </form>
            <a href="{{ route('users.index') }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded">Back to Index</a>
        </div>
    </div>
</body>
</html>