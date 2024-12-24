<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MM')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="header">
        <x-navbar></x-navbar>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <x-footer></x-footer>
    </footer>
</body>
</html>
