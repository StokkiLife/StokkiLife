<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Lógica para listar todos os produtos
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Lógica para salvar um novo produto no banco de dados
        Product::create($request->all());
        return redirect()->route('product.index')->with('success', 'Produto criado com sucesso!');
    }
}