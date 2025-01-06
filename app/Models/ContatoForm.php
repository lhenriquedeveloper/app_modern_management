<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContatoForm extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'motivo',
        'descricao'
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'motivo' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    const MOTIVOS = [
        1 => 'Dúvida',
        2 => 'Sugestão',
        3 => 'Reclamação',
        4 => 'Outros'
    ];
}
