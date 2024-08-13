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
            $table->string('normaCompetencia',10)->primary(); //Columna que almacena el codigo de la competencia
            $table->string('codigoPrograma',8); //Columna que alamacena el codigo del programa 
            $table->string('nombreCompetencia',70); //Columna que almacena el nombre de la competencia 
            $table->unsignedSmallInteger('duracionCompetencia'); //Columna que almacena la duracion de la competencia
            //$table->unsignedBigInteger('disenoCurricular'); //Columna que almacena el id del diseño curricular esto es ujan llave foranea que viene de la tabla diseno curricular 
            //Se define la llave foranea
            //$table->foreign('idDisenoCurricular')->references('id')->on('disenoCurricular')->onDelete('cascade');
            
            //Definicion de llaves foraneas
            $table->foreign('codigoPrograma')->references('codigoPrograma')->on('diseno_curriculars')->onDelete('cascade');
            
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
