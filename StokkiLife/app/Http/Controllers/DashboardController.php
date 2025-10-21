<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Importa o Model de Produto
use App\Models\Sale;    // Importa o Model de Venda

class DashboardController extends Controller
{
    /**
     * Display the main dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Esta função será responsável por buscar os dados e mostrar o dashboard.
        // Por agora, vamos apenas retornar uma view simples.
        // A lógica completa será adicionada quando criarmos as views.
        
        // Exemplo de como seria a lógica:
        $product = Product::all();
        $sale = Sale::whereDate('data_venda', today())->get(); // Corrigido o nome do campo para 'data_venda' (antes estava como data_venda)
        
        return view('dashboard', compact('product', 'sale'));
        }
}