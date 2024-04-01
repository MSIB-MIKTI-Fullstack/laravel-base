<!-- resources/views/layouts/admin.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Tambahkan link CSS atau library lainnya di sini -->
</head>
<body>
    <header>
        <!-- Tambahkan header jika diperlukan -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Tambahkan footer jika diperlukan -->
    </footer>
    <!-- Tambahkan script JavaScript atau library lainnya di sini -->
</body>
</html>
