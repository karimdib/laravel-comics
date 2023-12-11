<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>header</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        <ul>
            <li>CHARACTERS</li>
            <li>COMICS</li>
            <li>MOVIES</li>
            <li>TV</li>
            <li>GAMES</li>
            <li>COLLECTIBILES</li>
            <li>VIDEOS</li>
            <li>FANS</li>
            <li>NEWS</li>
            <li>SHOP</li>
        </ul>
        <button>Cerca</button>
    </header>
    @yield('header')
</body>

</html>