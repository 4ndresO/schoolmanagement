<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Bootstrap CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-dropdown')

        <!-- Page Heading -->
        @hasSection('header')
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                @yield('header')
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>
</html>
