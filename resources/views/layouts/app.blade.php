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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.2/zephyr/bootstrap.min.css" integrity="sha512-6xTXXOICeHpx2gWokonCPSIdUI/pgnq2e0Q9OoBszhagROWSjZxbeHOAmaRhMAHuVEkPK44/7j5uLmSIxu8EMw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <header aria-label="page caption" class="flex-none flex h-24 bg-gray-100 border-t px-4 items-center">
                    <span id="page-caption" class="h1 mt-3 w-100"> 
                        {{ $header }}
                    </span>
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
