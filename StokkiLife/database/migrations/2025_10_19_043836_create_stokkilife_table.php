<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stokkilife', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->index();
            $table->decimal('preco_produto', 10, 2);
            $table->decimal('quant_estoque', 10, 2);
        });

        Schema::create('sale', function (Blueprint $table) {
            $table->id();
            $table->string('id_produto')->index();
            $table->decimal('quantidade', 10, 2);
            $table->decimal('preco_total', 10, 2);
            $table->dateTime('data_venda');
            $table->timestamps();
        });

        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->index();
            $table->string('password');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stokkilife');
    }
};
