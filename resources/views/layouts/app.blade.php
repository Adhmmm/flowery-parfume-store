<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Icons --}}
    <script src="https://kit.fontawesome.com/6f03cac72d.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=bigshot-one:400|family=figtree:400,500,600&display=swap"
        rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex flex-col md:flex-row min-h-screen">
        {{-- Sidebar --}}
        @include('profile.admin.partials.sidebar')

        {{-- Main Content --}}
        <main class="flex-1 p-auto overflow-y-auto">
            <header class="mb-4">
                <h1 class="text-2xl font-semibold text-gray-800">
                    {{ $header ?? 'Admin Panel' }}
                </h1>
                <p class="text-gray-600 mt-12">
                    {{ $description ?? 'Manage your application settings and content.' }}
            </header>

            {{ $slot }}
        </main>
    </div>

    @stack('scripts')

</body>

</html>
