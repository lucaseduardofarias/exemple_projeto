<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJogadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogadors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('idade');
            $table->string('posicao_atleta');
            $table->string('cidade_nascimento');
            $table->string('numeroAtleta');
            $table->unsignedBigInteger('time_id')->nullable();
            $table->foreign('time_id')->references('id')->on('times');
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
        Schema::dropIfExists('jogadors');
    }
}
