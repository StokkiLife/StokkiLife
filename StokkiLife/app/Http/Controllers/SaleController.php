<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\SaleItem;
use App\Models\Product;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Lógica para listar todas as vendas (acessos)
        $sales = Sale::with('items.product')->latest()->get();
        return view('sales.index', compact('sales'));
        return "Página de Listagem de Vendas (Acessos) - Controller a funcionar!";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Mostra o formulário de registo de venda
        $products = Product::all();
        return view('sales.create', compact('products'));
        return "Formulário para Registar Nova Venda";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Lógica completa para salvar uma venda, dar baixa no stock, etc.
        DB::transaction(function () use ($request) {
        //     // ... lógica aqui ...
     });
        return "Venda registada com sucesso! (Simulação)";
    }
}
