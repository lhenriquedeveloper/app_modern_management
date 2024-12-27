<?php

namespace App\Http\Controllers;

class ContatoController extends Controller
{
    public function contato()

    {
        var_dump($_POST);
        return view('contato');
    }
}
