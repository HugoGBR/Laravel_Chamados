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
        Schema::create('chamados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->foreignId('subcategoria_id')->constrained('subcategorias'); // Deve usar constrained()
            $table->text('descricao');
            $table->enum('prioridade', ['baixa', 'media', 'alta']);
            $table->enum('status', ['aberto', 'em_andamento', 'resolvido', 'fechado'])->default('aberto');
            $table->foreignId('tecnico_id')->nullable()->constrained('usuarios');
            $table->timestamps();
        });
    }    
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chamados');
    }
};
