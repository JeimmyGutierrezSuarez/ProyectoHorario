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
            $table->string('tipoDocumento', 5); //Columna que almacena el tipo de documento del instructor
            $table->string('numeroDocumento',10)->primary(); //Columna que almacena la cedula del instructor 
            $table->string('nombreInstructor',70); //Columna que almacena el nombre del instructor 
            $table->string('apellidoInstructor',70); //Columna que almacena el apellido del instructor
            $table->string('numeroCelular',10); //Columna que almacena el numero de celular del instriuctor
            $table->string('correo',25); //Coluna que almacena el correo del instructor
            $table->unsignedBigInteger('idPerfilInstructor'); //Columna que almacena el id del perfil del instructor
            #$table->string('normaCompetencia',10); //Columna que almacena el id de la competencia, esta es una llava foranea que viene de la tabla Competencia
            
            //Definicion de las llaves foraneas 
            #$table->foreign('idCompetencia')->references('idCompetencias')->on('id')->onDelete('cascade'); 
            #$table->foreign('normaCompetencia')->references('normaCompetencia')->on('competencias')->onDelete('cascade');
            $table->foreign('idPerfilInstructor')->references('idPerfilInstructor')->on('perfil_instructors')->onDelete('cascade');
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
