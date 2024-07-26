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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id('cedula'); //Columna que almacena el id Instructor en este caso sera la cedula 
            //$table->string('cedula'); //Columna que almacena la cedula del instructor 
            $table->string('nomInstructor'); //Columna que almacena el nombre del instructor 
            $table->string('apeInstructor'); //Columna que almacena el apellido del instructor
            $table->string('numCelular'); //Columna que almacena el numero de celular del instriuctor
            $table->string('idCompetencia'); //Columna que almacena el id de la competencia, esta es una llava foranea que viene de la tabla Competencia
            //Definicion de las llaves foraneas 
            $table->unsignedBigInteger('idCompetencia')->references('competencias')->on('id')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
