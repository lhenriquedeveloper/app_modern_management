<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->string('codigo')->unique();
            $table->string('sku')->unique()->nullable();
            $table->decimal('preco_custo', 10, 2)->default(0);
            $table->decimal('preco_venda', 10, 2)->default(0);
            $table->integer('estoque_minimo')->default(0);
            $table->integer('estoque_atual')->default(0);
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->foreignId('fornecedor_id')->constrained('fornecedores');
            $table->string('imagem')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->index(['nome', 'codigo', 'sku']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
