<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title." - ".config('app.name') ?? 'Dashboard' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased bg-gray-100 text-gray-800">
    <div class="min-h-screen">
        <div class="">
            @include('partials.topbar')
        </div>

        <div class="py-10">
            <div class="container mx-auto">
                {{ $slot }}
            </div>
        </div>
    </div>

    @livewireScripts
</body>
</html>
