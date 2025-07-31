<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Flowery Parfum' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Icons --}}
    <script src="https://kit.fontawesome.com/6f03cac72d.js" crossorigin="anonymous"></script>

    {{-- Alpine.js --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=aclonica:400|bigshot-one:400|family=figtree:400,500,600&display=swap"
        rel="stylesheet" />
</head>

<body class="bg-white text-gray-900">

    {{-- Navbar --}}
    @include('layouts.customer.navbar')

    <main class="min-h-screen pt-28">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    @include('layouts.customer.footer')

</body>

</html>
