<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('raps', function (Blueprint $table) {
            $table->id('idRap'); //Columna que almacena el id del Rap
            $table->string('descripcion',100); //Columna que almacena la descripcion de el rap
            $table->string('normaCompetencia',10); //Columna que almacena el id de la competencia - llave foranea que viene de la tabla competencia
             

            //Definicion de las llaves foranes
            $table->foreign('normaCompetencia')->references('normaCompetencia')->on('competencias')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('raps');
    }
};
