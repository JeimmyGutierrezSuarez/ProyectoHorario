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
            $table->id('idFicha'); //El numero de la ficha
            $table->string('nomPrograma',100); //nombre del programa
            $table->string('trimestre',10); //trimestre en el cual va la ficha
            $table->date('fecInicio'); //Fecha en la cual inicia la ficha
            $table->date('fecFin'); //Fecha en la cual termina la ficha
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
