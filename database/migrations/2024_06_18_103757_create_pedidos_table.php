<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->enum('estado', ['pendente', 'processando', 'concluido']);
            $table->date('data');
            $table->double('total');
            $table->string('cliente_nome');
            $table->string('cliente_email')->nullable();
            $table->string('cliente_endereco')->nullable();
            $table->string('cliente_telefone');
            $table->string('comentario')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
