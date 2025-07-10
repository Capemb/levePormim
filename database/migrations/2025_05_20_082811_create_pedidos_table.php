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

            // Dados do remetente
            $table->string('primeiro_nome');
            $table->string('ultimo_nome');
            $table->string('numero_remetente');
            $table->string('numero_receptor'); // Telefone alternativo do remetente

            $table->string('artigo_recolha');
            $table->date('data_recolha');
            $table->time('hora_recolha');
            $table->string('municipio_recolha');
            $table->string('distrito_recolha');

            // Dados do receptor
            $table->string('primeiro_nome_receptor');
            $table->string('ultimo_nome_receptor');
            $table->string('numero_receptor_principal');
            $table->string('numero_receptor_altenativo');
            $table->string('municipio_entrega');
            $table->string('distrito_entrega');

            // Descrição do pedido
            $table->text('descricao')->nullable();

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
