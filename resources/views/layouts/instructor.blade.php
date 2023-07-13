<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

           

            <!-- Page Content -->
            <div class="mx-w 7xl mx-auto sm:px-6 lg:px-8 py-8 grid grid-cols-5">
                <aside>
                    <h1 class="font-bold text-lg mb-4">Edicion del Curso</h1>
                    <ul class="text-sm text-gray-700">
                        <li class="leading-7 mb-1 border-l-4 border-[rgb(50,5,30)] pl-2">
                            <a href="#">Informacion del curso</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                            <a href="#">Lecciones del curso</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                            <a href="">Metas del curso</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                            <a href="">Estudiantes</a>
                        </li>
                    </ul>
                </aside>
                <div class="col-span-4 card bg-white shadow-xl">
                    <main class="card-body text-gray-700 pl-5 pt-2">
                       {{$slot}}
                    </main>
                    
                </div>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
