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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id('idHorario'); //Columna que almacena el id del horario
            $table->('numeroFicha'); //Columna que almacena el id ficha - llave foranea  de la tabla ficha
            $table->string('nivel'); //Columna que almacena el nivel del programa
            $table->('versionProrama'); //Columna que almacena la version del programa
            $table->unsignedBigInteger('idBloque'); //Columna que almacena el id bloque -llave foranea de la tabla bloque
            $table->('idSede'); //Columna que almacena id sede - llave foranea de la tabla sede
            $table->('idAmbiente'); //Columna que almacena id ambiente - llave foranea de la tabla ambiente
            $table->('codigoPrograma'); //columna que almacena codigo del programa
            $table->('idRap'); //Columna que almacena el id rap - Llave foranea de la tabla resultados de aprendizaje
            $table->('idJornada'); //Columna que almacena el id de la jornada
            $table->('cedula'); //Columna que almacena la cedula del instructor - llave foranea de la tabla instructor
            
             

            //Definicion de las llaves foraneas
            $table->unsignedBigInteger('idFicha')->references('fichas')->on('id')->onDelete('cascade'); 
            $table->unsignedBigInteger('idBloque')->references('bloques')->on('id')->onDelete('cascade');
            $table->unsignedBigInteger('idCompetencia')->references('competencias')->on('id')->onDelete('cascade');
            $table->unsignedBigInteger('cedula')->references('instructors')->on('id')->onDelete('cascade');
            $table->unsignedBigInteger('idAmbiente')->references('ambientes')->on('id')->onDelete('cascade');
            $table->unsignedBigInteger('idSede')->references('sedes')->on('id')->onDelete('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
