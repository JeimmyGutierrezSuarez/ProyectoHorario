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
        Schema::create('diseno_curriculars', function (Blueprint $table) {
            //$table->id('idDisCurricular'); //Columna que almacena el id del diseño curricular
            $table->int('idRed'); //Columna que almacena el id de la red correspondiente
            $table->int('idArea'); //Columna que almacena el id de el area correspondiente
            $table->string('nombrePrograma',100); //Columna que almacena la Denominacion del programa
            $table->string('codigoPrograma',8); //Columna que almacena la Codigo del programa
            $table->string('versionPrograma',10); //Columna que almacena la Version del programa
            $table->date('fechaInicio'); //Columna que almacena la fecha de inicio del programa
            $table->date('fechaFin'); //Columna que almacena la fechja final del programa
            $table->integer('duracionPrograma');// Columna que almacena la duracion del programa
            $table->string('tipoPrograma',15); //Columna que almacena el tipo de programa (titulada o otra)
            $table->unsignedBigInteger('idNivel'); //Columna que almacena el nivel del progrma (tecnico o tecnologo)
            $table->date('vigenciaProgramaInicio'); //Cpolumna que almacena l fecha de vigencia Inicio
            $table->date('vigenciaProgramaFin'); //Coolumna que almacena l fecha de vigencia Inicio
            $table->string('cerPrograma',10); //Columna que almacena el certificado del programa (tecnico o tecnologo)
            $table->timestamps();

            //Definiendo llaves primarias codigoAPrograma y versionPrograma
            $table->primary(['codigoPrograma','versionPrograma']);

            //DEfiniendo llaves foraneas 
            $table->foreign('idRed')->references('idRed')->on('reds');
            $table->foreign('idArea')->references('idArea')->on('areas');
            $table->foreign('idNivel')->references('idNivel')->on('nivels');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diseno_curriculars');
    }
};
