
<title>DashBoard - StokkiLife</title>
<link rel="icon" href="{{ asset('imgs/stokkilife-logo.png') }}">
<x-app-layout>
    <x-slot name="header">
        {{ __('DashBoard') }}
    </x-slot>

    <style>
        body {
            font-family: arial;
        }

        /* Layout */
        .dashboard {
            display: grid;
            gap: 2rem;
            grid-template-columns: 1fr;
            padding: 1rem;
        }

        @media (min-width: 768px) {
            .dashboard {
                grid-template-columns: 1fr;
            }
        }

        /* Section title */
        .section-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #1f2937; /* gray-800 */
        }

        /* Top overview cards grid (3 columns) */
        .overview-grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 1rem;
        }

        @media (min-width: 768px) {
            .overview-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* Card base */
        .card {
            background: #ffffff;
            padding: 1rem;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.08);
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .card .icon-wrap {
            padding: 0.75rem;
            border-radius: 9999px;
            background: #f3f4f6; /* gray-100 */
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .card .meta p:first-child {
            font-size: 0.875rem;
            color: #6b7280; /* gray-500 */
            margin: 0;
        }

        .card .meta p:last-child {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1f2937; /* gray-800 */
            margin: 0.125rem 0 0 0;
        }

        /* Special borders for specific cards */
        .border-left-red {
            border-left: 4px solid #ef4444; /* red-500 */
        }

        .border-left-yellow {
            border-left: 4px solid #f59e0b; /* yellow-500 */
        }

        /* Quick actions grid */
        .actions-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }

        @media (min-width: 768px) {
            .actions-grid {
                grid-template-columns: repeat(4, 1fr);
                gap: 1.5rem;
            }
        }

        .action-btn {
            background: #ecfdf5; /* green-100 */
            padding: 1.5rem;
            border-radius: 0.75rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            transition: box-shadow .15s ease, transform .15s ease;
            text-decoration: none;
            color: inherit;
        }

        .action-btn:hover {
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.12);
            transform: translateY(-4px);
        }

        .action-btn .action-icon {
            background: #ffffff;
            padding: 0.75rem;
            border-radius: 9999px;
            margin-bottom: 0.75rem;
            display: inline-flex;
        }

        .action-btn .action-label {
            font-size: 1.125rem;
            font-weight: 600;
            color: #1f2937;
        }

        /* Chart placeholder */
        .chart-card {
            background: #ffffff;
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.08);
            height: 16rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6b7280;
        }
    </style>

    <div class="dashboard">
        <div>
            <h2 class="section-title">Visao Geral de hoje</h2>

            <div class="overview-grid">
                <!-- Card de Vendas -->
                <div class="card">
                    <div class="icon-wrap">
                        <i data-lucide="shopping-cart" style="width:1.5rem;height:1.5rem;color:#1f2937;"></i>
                    </div>
                    <div class="meta">
                        <p>Vendas no dia</p>
                        <p>5</p> {{-- Exemplo de dado estático --}}
                    </div>
                </div>

                <!-- Card de Stock Baixo -->
                <div class="card border-left-red">
                    <div class="icon-wrap">
                        <i data-lucide="package-x" style="width:1.5rem;height:1.5rem;color:#1f2937;"></i>
                    </div>
                    <div class="meta">
                        <p>Itens em Stock Baixo</p>
                        <p>1</p> {{-- Exemplo de dado estático --}}
                    </div>
                </div>

                <!-- Card de Contas a Receber -->
                <div class="card border-left-yellow">
                    <div class="icon-wrap">
                        <i data-lucide="hand-coins" style="width:1.5rem;height:1.5rem;color:#1f2937;"></i>
                    </div>
                    <div class="meta">
                        <p>Total a Receber</p>
                        <p>R$ 45.00</p> {{-- Exemplo de dado estático --}}
                    </div>
                </div>
            </div>
        </div>

        <div>
            <h2 class="section-title">Acoes Rapidas</h2>
            <div class="actions-grid">
                <!-- Botão Registar Venda -->
                <a href="{{ route('sale.create') }}" class="action-btn">
                    <div class="action-icon">
                        <i data-lucide="plus-circle" style="width:2rem;height:2rem;color:#065f46;"></i>
                    </div>
                    <span class="action-label">Registar Venda</span>
                </a>

                <!-- Botão Acessos -->
                <a href="{{ route('sale.index') }}" class="action-btn">
                    <div class="action-icon">
                        <i data-lucide="users" style="width:2rem;height:2rem;color:#065f46;"></i>
                    </div>
                    <span class="action-label">Acessos</span>
                </a>

                <!-- Botão Stokki -->
                <a href="{{ route('product.index') }}" class="action-btn">
                    <div class="action-icon">
                        <i data-lucide="archive" style="width:2rem;height:2rem;color:#065f46;"></i>
                    </div>
                    <span class="action-label">Stokki</span>
                </a>

                <!-- Botão Receber -->
                <a href="#" class="action-btn">
                    <div class="action-icon">
                        <i data-lucide="dollar-sign" style="width:2rem;height:2rem;color:#065f46;"></i>
                    </div>
                    <span class="action-label">Receber</span>
                </a>
            </div>
        </div>

        <div>
            <h2 class="section-title">Vendas do Dia</h2>
            <div class="chart-card">
                <p>
                    <!-- Aqui será colocado o grafico de pizza sobre a visao de hoje de vendas. -->
                    Gráfico de Vendas (Em breve)
                </p>
            </div>
        </div>
    </div>
</x-app-layout>