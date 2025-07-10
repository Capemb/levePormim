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
        Schema::create('motoboys', function (Blueprint $table) {
            $table->id();
            $table->string('primeiro_nome');
            $table->string('ultimo_nome');
            $table->string('telefone_principal'); 
            $table->string('telefone_altenativo'); 
            $table->string('matricula');
            $table->date('data_inicio');
            $table->string('zona_servico'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motoboys');
    }
};
