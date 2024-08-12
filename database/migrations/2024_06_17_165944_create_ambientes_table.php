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
        Schema::create('ambientes', function (Blueprint $table) {
            $table->id('idAmbiente'); //Id ambiente
            $table->string('nombreAmbiente'); //nombre del ambiente
            $table->unsignedBigInteger('idTipoAmbiente'); //id del tipo de ambiente el cual le pertenece
            $table->unsignedBigInteger('idSede'); //id sede esta es una llave foranea de la tabla sede
            $table->unsignedBigInteger('idEstado'); //Id estado esta es una llave foranea que esta en la tabla estado
           
            //Definicion de llaves foraneas
            $table->foreign('idTipoAmbiente')->references('idTipoAmbiente')->on('tipo_ambientes')->onDelete('cascade'); //definisicion de llave foranea 
            $table->foreign('idSede')->references('idSede')->on('sedes')->onDelete('cascada');
            $table->foreign('idEstado')->references('idEstado')->on('estados')->onDelete('cascada');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ambientes');
    }


    
 //modelo controlador migracion

};

