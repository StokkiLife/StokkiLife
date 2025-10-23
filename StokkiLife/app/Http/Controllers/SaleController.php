<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sale;
use App\Models\SaleItem;
use App\Models\Product;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
    public function index()
    {
        // Lógica para listar todas as vendas (acessos)
        $sale = Sale::with('item.product')->latest()->get();
        return view('sale.index', compact('sale'));
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Mostra o formulário de registo de venda
        $product = Product::all();
        return view('sale.create', compact('product'));
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
            // Use $request data here
            // Example: Sale::create($request->all());
        });
        return redirect()->route('sale.index')->with('success', 'Venda registada com sucesso!');
    }

    public function index()
    {
        // Lógica para listar todas as vendas (acessos)
        $sale = Sale::with('item.product')->latest()->get();
        return view('sale.index', compact('sale'));
    }
    }
