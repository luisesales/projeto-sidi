<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoIndicadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_indicadors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_aluno');
            $table->unsignedBigInteger('id_indicador');

            $table->foreign('id_aluno')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_indicador')->references('id')->on('indicadors')->onDelete('cascade');
            
            $table->float('nota_indicador')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno_indicadors');
    }
}
