<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Categoria;

class Produto extends Model
{
    use SoftDeletes;

    protected $table = 'produtos';

    protected $fillable = [
        'nome',
        'descricao',
        'codigo',
        'sku',
        'preco_custo',
        'preco_venda',
        'estoque_minimo',
        'estoque_atual',
        'categoria_id',
        'fornecedor_id',
        'status',
        'imagem'
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'preco_custo' => 'decimal:2',
        'preco_venda' => 'decimal:2',
        'estoque_minimo' => 'integer',
        'estoque_atual' => 'integer',
        'status' => 'boolean'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedores::class);
    }
}
