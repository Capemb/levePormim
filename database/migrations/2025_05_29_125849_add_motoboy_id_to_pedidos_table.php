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
        Schema::table('pedidos', function (Blueprint $table) {
            $table->unsignedBigInteger('motoboy_id')->nullable()->after('distrito_recolha');
            $table->foreign('motoboy_id')->references('id')->on('motoboys')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->dropForeign(['motoboy_id']);
            $table->dropColumn('motoboy_id');
        });
    }

};
