<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Halo, {{ $nama }}</h1>
        <p>Selamat belajar {{ $materi }}</p>
        <a href="{{ route('name') }}">Go to name</a>
    </div>
</body>
</html>