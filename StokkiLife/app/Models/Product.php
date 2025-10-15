<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * O nome da tabela associada ao model (opcional se for 'products').
     *
     * @var string
     */
    protected $table = 'product';

    /**
     * Os atributos que podem ser preenchidos em massa (Mass Assignment).
     * Ajuste conforme as colunas da sua tabela 'products'.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'preco_produto',
        'quant_estoque',
    ];

    // Se houverem relacionamentos, eles virão aqui (ex: um produto tem muitas vendas)
    public function sales()
    {
    return $this->hasMany(Sale::class);
    }
}