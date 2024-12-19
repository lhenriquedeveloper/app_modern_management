<?php

namespace App\Http\Controllers;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            ['nome' => 'Fornecedor 1', 'status' => 'N', 'cnpj' => '1230001/9'],
            [
                'nome' => 'Joãozin TypeScript',
                'status' => 'S'
            ]


        ];
        return view('site.app.fornecedor.index', compact('fornecedores'));
    }
}
