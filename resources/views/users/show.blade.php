<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show User</title>
    @vite('resources/css/app.css')
</head>
<body class="flex  justify-center items-center min-h-screen bg-slate-300">
    <div class="max-w-md w-full shadow-md rounded bg-white p-6">
        <p class="text-lg font-bold mb-2">{{ $user->name }}</p>
        <p class="text-gray-500 mb-4">{{ $user->email }}</p>
    </div>
</body>
</html>