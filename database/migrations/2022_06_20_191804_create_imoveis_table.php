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
        Schema::create('imoveis', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',65);
            $table->integer('motivo');
            $table->integer('visibility');
            $table->bigInteger('valor');
            $table->string('endereco',256);
            $table->string('googlemaps');
            $table->string('descricao');
            $table->integer('quarto');
            $table->integer('banheiro');
            $table->integer('suite');
            $table->integer('garagem');            
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
        Schema::dropIfExists('imoveis');
    }
};
