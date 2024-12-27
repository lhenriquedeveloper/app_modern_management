<?php
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\FornecedorController;
use Illuminate\Support\Facades\Route;

//Rota Principal
Route::get('/', [PrincipalController::class, 'principal'])->name('site.principal');
//Rota Sobre Nos
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobre-nos');
//Rota de Contatos
Route::post('/contato', [ContatoController::class, 'contato'])->name('site.contato');

//Rota de Apps
Route::prefix('/app')->group(function () {
    //Rota de Clientes
    Route::get('/clientes', function () {
        return 'Rota de Clientes';
    })->name('site.clientes');
   //Rota de Fornecedor
    Route::get('/fornecedor', [FornecedorController::class, 'index'])
        ->name('site.fornecedor');
  //Rota de Produtos
    Route::get('/produtos', function () {
        return 'Rota de Produtos';
    })->name('site.produtos');
});
 //Rota de Fallback
Route::fallback([FallbackController::class, 'fallback'])->name('site.fallback');
;
