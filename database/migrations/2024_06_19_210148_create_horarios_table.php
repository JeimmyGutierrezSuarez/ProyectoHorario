<?php

use App\Models\raps;
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
            $table->unsignedBigInteger('numeroFicha'); //Columna que almacena el id ficha - llave foranea  de la tabla ficha
            $table->unsignedBigInteger('idNivel'); //Columna que almacena el nivel del programa
           #$table->string('versionProrama'); //Columna que almacena la version del programa
            $table->unsignedBigInteger('idBloque'); //Columna que almacena el id bloque -llave foranea de la tabla bloque
            $table->unsignedBigInteger('idSede'); //Columna que almacena id sede - llave foranea de la tabla sede
            $table->unsignedBigInteger('idAmbiente'); //Columna que almacena id ambiente - llave foranea de la tabla ambiente
            $table->string('normaCompetencia',10);
            $table->string('codigoPrograma',8); //columna que almacena codigo del programa
            $table->unsignedBigInteger('idRap'); //Columna que almacena el id rap - Llave foranea de la tabla resultados de aprendizaje
            $table->unsignedBigInteger('idJornada'); //Columna que almacena el id de la jornada
            $table->string('numeroDocumento',10); //Columna que almacena la cedula del instructor - llave foranea de la tabla instructor
            

            //Definicion de las llaves foraneas
            $table->foreign('numeroFicha')->references('numeroFicha')->on('fichas')->onDelete('cascade'); 
            $table->foreign('idNivel')->references('idNivel')->on('nivels')->onDelete('cascade');
            $table->foreign('idBloque')->references('idBloque')->on('bloque_horas')->onDelete('cascade');
            $table->foreign('idSede')->references('idSede')->on('sedes')->onDelete('cascade');
            $table->foreign('idAmbiente')->references('idAmbiente')->on('ambientes')->onDelete('cascade');
            $table->foreign('normaCompetencia')->references('normaCompetencia')->on('competencias')->onDelete('cascade');
            $table->foreign('codigoPrograma')->references('codigoPrograma')->on('diseno_curriculars')->onDelete('cascade');
            $table->foreign('idRap')->references('idRap')->on('raps')->onDelete('cascade');
            $table->foreign('idJornada')->references('idJornada')->on('jornadas')->onDelete('cascade');
            $table->foreign('numeroDocumento')->references('numeroDocumento')->on('instructors')->onDelete('cascade');
        
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
