<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Laravel App' }}</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ url('') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
        </ul>
    </nav>
    {{ $slot }}
</body>
</html>