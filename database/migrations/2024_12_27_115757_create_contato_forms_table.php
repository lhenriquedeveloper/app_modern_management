<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contato_forms', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('telefone', 20);
            $table->string('email')->unique();
            $table->tinyInteger('motivo')->comment('1-Dúvida, 2-Sugestão, 3-Reclamação, 4-Outros');
            $table->text('descricao')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contato_forms');
    }
};
