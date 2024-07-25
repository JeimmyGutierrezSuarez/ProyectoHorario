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
        Schema::create('competencias', function (Blueprint $table) {
            $table->id();
            $table->string('nomCompetencia'); //Columna que almacena la norma de la competencia
            $table->string('codCompetencia'); //Columna que almacena el codigo de la competencia 
            $table->string('nomCompetencia'); //Columna que almacena el nombre de la competencia 
            $table->string('durCompetencia'); //Columna que almacena la duracion de la competencia
            $table->id('disCurricular'); //Columna que almacena el id del diseño curricular esto es ujan llave foranea que viene de la tabla diseno curricular 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competencias');
    }
};
