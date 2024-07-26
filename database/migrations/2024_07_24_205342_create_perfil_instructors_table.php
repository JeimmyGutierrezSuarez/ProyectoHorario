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
        Schema::create('perfil_instructors', function (Blueprint $table) {
            $table->id('idPerInstructor'); //Columna que almacena el id del perfil de cada instructor que aparece en el diseñ0o cuuricular
            $table->string('reqAcademicos'); //Columna que almacena los requisitos academicos del instructor que paarce en el perfil 
            $table->string('expInstructor',250); //Columna que alamacena la experiecnia que requiere tener el instructor para dictar dicha competencia
            $table->string('competencia',100); //Columna que almacena el nombre de la competencia que es requerida 
            $table->string('idCompetencia'); //Columna que almacena el id de la competencia es una llave foranea viene de la tabla competencia
            //Definicion de las llaves foraneas
            $table->unsignedBigInteger('idcompetencias')->references('competencias')->on('id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfil_instructors');
    }
};
