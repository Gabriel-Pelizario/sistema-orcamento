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
        Schema::create('clientes', function (Blueprint $table) {

            // contato
            $table->id();
            $table->string('nome');
            $table->string('telefone');
            $table->string('celular');
            $table->dateTime('dt_Nascimento');
            $table->string('cpf');
            $table->string('rg');
            $table->string('tp_atendimento');
            $table->string('email');

            // // Relacionamento com o usuario e o cliente
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');

            // relacionamento com o usuário (um para muitos)
            // $table->unsignedBigInteger('id_user');
            // $table->foreign('id_user')->references('id')->on('users')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');

            // relacionamento com o orçamento
            // $table->unsignedBigInteger('id_orcamento');
            // $table->foreign('id_orcamento')->references('id')->on('orcamentos')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');

            $table->timestamps();
        });

        // a tabela que está sendo referenciada deve ser criada primeiro, mudei isto no nome da migration através do rename (alterar o cód. antes do underline create)
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clientes', function (Blueprint $table){
            $table->foreignId('user_id')
            ->constrained();
        });
    }
};
