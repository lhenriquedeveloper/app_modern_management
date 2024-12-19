<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.principal');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobre-nos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Rota de Clientes';
    })->name('site.clientes');
    Route::get('/fornecedor', [FornecedorController::class, 'index'])
        ->name('site.fornecedor');
    Route::get('/produtos', function () {
        return 'Rota de Produtos';
    })->name('site.produtos');
});

Route::fallback(function () {
    return 'Fallback';
});
