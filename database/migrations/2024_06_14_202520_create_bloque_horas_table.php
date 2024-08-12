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
        Schema::create('bloque_horas', function (Blueprint $table) {
            $table->id('idBloque'); //Columna que almacena el Id Hora la cual con este se va a identificar la hora
            $table->time('horaInicio'); //Columna que almacena la Hora inicio la cual empieza el horario
            $table->time('horaFinal'); //Columna que almacena la Hora fin la cual se termina el horario
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bloque_horas');
    }
};
