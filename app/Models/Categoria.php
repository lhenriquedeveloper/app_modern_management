<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;

    protected $table = 'categorias';

    protected $fillable = [
        'nome',
        'descricao',
        'status'
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
