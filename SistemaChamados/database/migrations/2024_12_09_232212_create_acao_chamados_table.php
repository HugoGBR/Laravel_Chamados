<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('acoes_chamados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chamado_id')->constrained('chamados');
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->text('acao');
            $table->timestamp('data')->useCurrent();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acao_chamados');
    }
};
