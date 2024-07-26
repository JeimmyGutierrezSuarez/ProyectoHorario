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
            $table->id('idFicha'); //Columna que almacena el numero de la ficha
            $table->string('nomPrograma',100); //Columna que almacena el nombre del programa
            $table->string('trimestre',10); //Columna que almacena el trimestre en el cual va la ficha
            $table->date('fecInicio'); //Columna que almacena la fecha en la cual inicia la ficha
            $table->date('fecFin'); //Columna que almacena el fecha en la cual termina la ficha
            $table->timestamps();
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
