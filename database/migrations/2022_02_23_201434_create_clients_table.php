<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->string('nom',50); 
            $table->string('prenom',50) ; 
            $table->string('Tel',50)->unique(); 
            $table->string('ville',50) ;
            $table->string('addresse',50);
            $table->unique(['prenom','addresse']); 
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
        Schema::dropIfExists('clients');
    }
}
