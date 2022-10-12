<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            <main class="flex-grow flex min-h-0 border-t">
                @livewire('navigation-menu')
                @if (isset($header))
                <header aria-label="page caption" class="flex-none flex h-16 bg-gray-100 border-t px-4 items-center">
                    <h1 id="page-caption" class="font-semibold text-lg"> {{ $header }}</h1>
                </header>
            @endif
                {{ $slot }}
          

            </main>
        </div>
        </div>
            <!-- Page Heading 
       
           Page Content -->
          
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
