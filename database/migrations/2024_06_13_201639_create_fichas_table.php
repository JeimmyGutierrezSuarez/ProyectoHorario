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
        Schema::create('fichas', function (Blueprint $table) {
            $table->id('numeroFicha'); //Columna que almacena el numero de la ficha
            $table->string('trimestre',); //Columna que almacena el trimestre en el cual va la ficha
            $table->string('codigoPrograma',8); //Se define campo para el codigo del programa que aparece en el diseño curricular
            $table->string('nombrePrograma',100); //Columna que almacena el nombre del programa
            $table->date('fechaInicio'); //Columna que almacena la fecha en la cual inicia la ficha
            $table->date('fechaFin'); //Columna que almacena el fecha en la cual termina la ficha
            $table->unsignedBigInteger('idRed'); //Se define campo para la red que corresponda
            $table->unsignedBigInteger('idArea'); //Se define campo para la area que corresponda
            $table->string('proyectoProductivo',50); //Se define campo para el proyecto de la ficha
            $table->timestamps();

            //Definicion de las llaves foraneas
            $table->foreign('idArea')->references('idArea')->on('areas')->onDelete('cascade');
            $table->foreign('idRed')->references('idRed')->on('reds')->onDelete('cascade');
            $table->foreign('codigoPrograma')->references('codigoPrograma')->on('diseno_curriculars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichas');
    }
};
