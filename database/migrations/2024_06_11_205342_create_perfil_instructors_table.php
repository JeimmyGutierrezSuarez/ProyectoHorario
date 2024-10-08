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
            $table->id('idPerfilInstructor'); //Columna que almacena el id del perfil de cada instructor que aparece en el diseñ0o curricular
            $table->string('requisitosAcademicos',200); //Columna que almacena los requisitos academicos del instructor que aparece en el perfil 
            $table->string('experienciaLaboral',100); //Columna que alamacena la experiecnia que requiere tener el instructor para dictar dicha competencia
            $table->string('experienciaDocencia',200);
            $table->string('competencias',200); //Columna que almacena el nombre de la competencia que el requiere
            
            #$table->unsignedBigInteger('codigoCompetencia'); //Columna que almacena el id de la competencia es una llave foranea viene de la tabla competencia - viene de la tabla competencia 
            $table->timestamps();


            //Definicion de las llaves foraneas
            #$table->foreign('codigoCompetencia')->references('codigoCompetencia')->on('competencias')->onDelete('cascade');
            
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
