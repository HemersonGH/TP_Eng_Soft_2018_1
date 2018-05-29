<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtividadeAlocadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividades_alocadas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_atividade')->unsigned();
            $table->integer('id_disciplina')->unsigned();
            $table->datetime('data_entrega')->nullable();
            $table->foreign('id_atividade')->references('id')->on('atividades')->onDelete('cascade');
            $table->foreign('id_disciplina')->references('id')->on('disciplinas')->onDelete('cascade');
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
        Schema::dropIfExists('atividade_alocadas');
    }
}
