<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoPokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_pokemon', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('idTipo')->unsigned()->nullable();
            $table->bigInteger('idPokemon')->unsigned()->required();
            
            $table->foreign('idTipo')->references('id')->on('tipos');
            $table->foreign('idPokemon')->references('id')->on('pokemones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_pokemon');
    }
}
