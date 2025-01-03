<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContatoForm extends Model
{
    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'motivo',
        'descricao'
    ];
}
