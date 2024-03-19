<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h1>{{ $teks }}</h1>
    <ul>
        <li><a href="{{ route('halaman.home') }}">Home</a></li>
        <li><a href="{{ route('halaman.dashboard') }}">Dashboard</a></li>
    </ul>
</body>
</html>
