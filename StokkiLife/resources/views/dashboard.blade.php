<title>Dashboard - StokkiLife</title>
    <link rel="icon" href="{{ asset('imgs/stokkilife-logo.png') }}">
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<x-app-layout>
    <x-slot name="header" class="text-green-400">
        {{ __('StokkiLife') }}
    </x-slot>

    <div class="space-y-10">
        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Visão Geral de hoje</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
                <!-- Card de Vendas -->
                <div class="bg-white p-5 rounded-lg shadow-md flex items-center gap-4 border-l-4 border-green-500">
                    <div class="p-3 rounded-full bg-gray-100">
                        <i data-lucide="shopping-cart" class="w-6 h-6 text-gray-800"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Vendas no dia</p>
                        <p class="text-2xl font-bold text-gray-800">5</p> {{-- Exemplo de dado estático --}}
                    </div>
                </div>

                <!-- Card de Stock Baixo -->
                <div class="bg-white p-5 rounded-lg shadow-md flex items-center gap-4 border-l-4 border-red-500">
                    <div class="p-3 rounded-full bg-gray-100">
                        <i data-lucide="package-x" class="w-6 h-6 text-gray-800"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Itens em Stock Baixo</p>
                        <p class="text-2xl font-bold text-gray-800">1</p> {{-- Exemplo de dado estático --}}
                    </div>
                </div>

                <!-- Card de Contas a Receber -->
                <div class="bg-white p-5 rounded-lg shadow-md flex items-center gap-4 border-l-4 border-yellow-500">
                    <div class="p-3 rounded-full bg-gray-100">
                        <i data-lucide="hand-coins" class="w-6 h-6 text-gray-800"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Total a Receber</p>
                        <p class="text-2xl font-bold text-gray-800">R$ 45.00</p> {{-- Exemplo de dado estático --}}
                    </div>
                </div>
            </div>
        </div>
        
        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Ações Rapidas</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
                <!-- Botão Registar Venda -->
                <a href="{{ route('sale.create') }}" class="bg-green-100 p-6 rounded-lg shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all flex flex-col items-center justify-center text-center">
                    <div class="p-3 bg-white rounded-full mb-3">
                        <i data-lucide="plus-circle" class="w-8 h-8 text-green-800"></i>
                    </div>
                    <span class="text-lg font-semibold text-gray-800">Registrar Venda</span>
                </a>

                <!-- Botão Acessos -->
                <a href="{{ route('sale.index') }}" class="bg-green-100 p-6 rounded-lg shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all flex flex-col items-center justify-center text-center">
                    <div class="p-3 bg-white rounded-full mb-3">
                        <i data-lucide="users" class="w-8 h-8 text-green-800"></i>
                    </div>
                    <span class="text-lg font-semibold text-gray-800">Acessos</span>
                </a>

                <!-- Botão Stokki -->
                <a href="{{ route('product.index') }}" class="bg-green-100 p-6 rounded-lg shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all flex flex-col items-center justify-center text-center">
                    <div class="p-3 bg-white rounded-full mb-3">
                        <i data-lucide="archive" class="w-8 h-8 text-green-800"></i>
                    </div>
                    <span class="text-lg font-semibold text-gray-800">Stokki</span>
                </a>

                <!-- Botão Receber -->
                <a href="#" class="bg-green-100 p-6 rounded-lg shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all flex flex-col items-center justify-center text-center">
                    <div class="p-3 bg-white rounded-full mb-3">
                        <i data-lucide="dollar-sign" class="w-8 h-8 text-green-800"></i>
                    </div>
                    <span class="text-lg font-semibold text-gray-800">Receber</span>
                </a>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Vendas do Dia</h2>
            <div class="bg-white p-6 rounded-lg shadow-md h-64 flex items-center justify-center">
                <p class="text-gray-500 text-center">
                    <!-- Aqui será colocado o grafico de pizza sobre a visao de hoje de vendas. -->
                    Gráfico de Vendas (Em breve)
                </p>
            </div>
        </div>
    </div>
</x-app-layout>