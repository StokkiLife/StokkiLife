<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('stokkilifeLogin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/* ----------------------------------- */ 
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// --- ROTAS DA APLICAÇÃO ---
// Estas rotas só devem ser acessíveis depois do login.
// O "middleware('auth')" garante isso.

Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Produtos (Stokki)
    Route::get('/product', [ProductController::class, 'index'])->name('products.index');
    Route::post('/product', [ProductController::class, 'store'])->name('products.store');

    // Vendas (Acessos)
    Route::get('/sale', [SaleController::class, 'index'])->name('sales.index'); // Listar vendas
    Route::get('/sale/create', [SaleController::class, 'create'])->name('sales.create'); // Formulário de nova venda
    Route::post('/sale', [SaleController::class, 'store'])->name('sales.store'); // Salvar a nova venda
});
