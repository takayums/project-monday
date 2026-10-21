<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="bg-white text-blue-300">
    <h1 class="bg-blue-300 text-orange-400">Asraf oke</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus asperiores necessitatibus in aut explicabo
        vitae laudantium? Provident quo, assumenda eius placeat vel tenetur exercitationem quaerat suscipit commodi
        atque, quos ea?</p>
</body>

</html>
