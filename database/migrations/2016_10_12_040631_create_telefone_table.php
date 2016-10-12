<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefone', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('descricao', 50);
            $table->string('cod_pais', 8);
            $table->integer('ddd');
            $table->integer('prefixo');
            $table->integer('sufixo');

            $table->integer('pessoa_id', false, true);

            $table->foreign('pessoa_id')->references('id')->on('pessoa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefone');
    }
}
