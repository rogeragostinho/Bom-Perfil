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
        /*Schema::create('itens_fatura', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fatura_id');
            $table->unsignedBigInteger('produto_id');
            $table->decimal('preco', 10,2);
            $table->integer('quantidade');
            $table->foreign('fatura_id')->references('id')->on('faturas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('produto_id')->references('id')->on('produtos')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itens_fatura');
    }
};
