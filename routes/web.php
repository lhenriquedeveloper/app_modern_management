<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'principal']);
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos']);
Route::get('/contato', [ContatoController::class, 'contato']);


Route::get('/clientes', [PrincipalController::class, 'principal']);
Route::get('/fornecedores', [SobreNosController::class, 'sobreNos']);
Route::get('/produtos', [ContatoController::class, 'contato']);

