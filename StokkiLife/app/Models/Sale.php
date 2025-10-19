<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    /**
     * O nome da tabela associada ao model (opcional se for 'sales').
     *
     * @var string
     */
    protected $table = 'sale';

    /**
     * Os atributos que podem ser preenchidos em massa (Mass Assignment).
     * Ajuste conforme as colunas da sua tabela 'sales'.
     *
     * @var array
     */
    protected $fillable = [
        'id_produto',
        'quantidade',
        'preco_total',
        'venda_data',
        // podemos adicionar mais colunas (opcional)
    ];

    /**
     * Os atributos que devem ser convertidos em tipos nativos.
     * Útil para 'data_venda' ser tratado como objeto Carbon.
     *
     * @var array
     */
    protected $casts = [
        'venda_data' => 'datetime', //detalhe despercebido
    ];

    // Se houverem relacionamentos, eles virão aqui (ex: uma venda pertence a um produto)
     public function product()
     {
        return $this->belongsTo(Product::class);
     }
}