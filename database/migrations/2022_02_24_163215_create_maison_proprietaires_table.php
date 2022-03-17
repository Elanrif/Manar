<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaisonProprietairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maison_proprietaires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('maison_id')->unique() ; 
            $table->foreign('maison_id')->references('id')->on('maisons') ; 
            $table->string('Etat')->nullable(); 
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
        Schema::dropIfExists('maison_proprietaires');
    }
}
