<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>

        /* CSS Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        .header h1 {
            margin: 0;
        }

        .hero-section h2 {
            font-size: 3em;
        }

        .hero-section p {
            font-size: 1.2em;
        }

        .button {
        background-color: #4CAF50;
        border: none;
        color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="header">
        <div class="container">
            <h1>Ini Navbar</h1>
        </div>
    </div>

    <div class="hero-section">
        <div class="container">
            <h2>Intro Dulu Bang</h2>
            <p>Pencet Tombol Yang Bawah Eyy!</p>
            <a href="{{ route('crud.index') }}" class="button">TES CRUD</a>
        </div>
    </div>

</body>
</html>
