<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envios', function (Blueprint $table) {
            //$table->increments('id');
            $table->integer('id_atividade_alocada')->unsigned();
            $table->integer('id_aluno')->unsigned();
            $table->string('comentario');
            $table->enum('status', ['não enviado', 'não avaliado', 'incorreto', 'correto']);
            $table->boolean('viewed')->default(true);
            $table->binary('answer');
            $table->primary(['id_atividade_alocada', 'id_aluno']);
            $table->foreign('id_atividade_alocada')->references('id')->on('atividades_alocadas')->onDelete('cascade');
            $table->foreign('id_aluno')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('envios');
    }
}
