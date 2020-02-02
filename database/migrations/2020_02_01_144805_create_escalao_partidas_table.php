<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscalaoPartidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escalao_partidas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('jogador_id')->nullable();
            $table->foreign('jogador_id')->references('id')->on('jogadors');
            $table->unsignedBigInteger('partida_id')->nullable();
            $table->foreign('partida_id')->references('id')->on('partidas');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escalao_partidas');
    }
}
