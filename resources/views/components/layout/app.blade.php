<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/6f03cac72d.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
</head>

<body class="bg-gray min-h-screen">
    <div class="flex flex-col md:flex-row min-h-screen">
        <x-layout.sidebar />

        <main class="flex-1 p-16 overflow-y-auto">
            @isset($header)
                <header class="mb-4">
                    {{ $header }}
                </header>
            @endisset

            {{ $slot }}
        </main>
    </div>
    @stack('scripts')
</body>

</html>
