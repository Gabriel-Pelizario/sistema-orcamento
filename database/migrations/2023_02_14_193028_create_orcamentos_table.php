<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id();
            $table->string('tp_orcamento')->nullable();
            $table->string('tp_pagamento')->nullable();
            $table->string('qtde_parcela')->nullable();
            $table->string('valor')->nullable();
            $table->string('validade')->nullable();
            $table->text('obs_pagamento')->nullable();
            $table->longText('historico')->nullable();
            $table->longText('orcamento')->nullable();

            // relacionamento com a tabela de cliente
            $table->foreignId('cliente_id')
            ->constrained()
            ->onDelete('cascade');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orcamentos', function (Blueprint $table){
            $table->foreignId('cliente_id')
            ->constrained()
            ->onDelete('cascade');
        });

    }
};
