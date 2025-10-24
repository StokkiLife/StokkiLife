<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('imgs/stokkilife-logo.png') }}">

        <title>{{ config('app.name', 'Stokki-Life') }}</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

        <!-- Fonts and Icons -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://unpkg.com/lucide@latest"></script>
    </head>
    <body class=" bg-gray-100">            
            <!-- Cabeçalho Principal -->
            <header class="bg-white border-b border-gray-200 sticky top-0 z-10">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-20">
                        <div class="flex items-center gap-4">
                           
                            <!-- Para inserir a sua logo, substitua o <div> abaixo pela sua tag <img> -->
                            <img src="{{ asset('imgs/stokkilife-logo.png') }}" alt="StokkiLife Logo" class="h-10 w-10"/>
                            <h1 class="text-2xl font-bold text-lime-600">{{ $header }}</h1>
                        </div>
                        
                        <!-- Menu do Utilizador -->
                        <div class="relative">
                             <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="p-2 rounded-full hover:bg-gray-100">
                                        <i data-lucide="user-circle" class="w-7 h-7 text-gray-500"></i>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <div class="px-4 py-2 border-b">
                                        <p class="text-sm font-semibold text-gray-800">{{ Auth::user()->name }}</p>
                                        <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                                    </div>
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Meu Perfil') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Sair') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Conteúdo da Página -->
            <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div class="px-4 py-6 sm:px-0">
                    {{ $slot }}
                </div>
            </main>
        <script>
            lucide.createIcons();
        </script>
    </body>
</html>