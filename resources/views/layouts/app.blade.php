<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Conquer Online')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-950 text-white">

    <x-navbar />

    <main class="pt-10">
        @yield('content')
    </main>

    <x-footer />

</body>
</html>