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
        Schema::create('administradors', function (Blueprint $table) {
            $table->id('idAdministrador');  //Se deine el id del admi
            $table->char('cedula',10);  //campo cedula
            $table->string('nombresAdministrador', 20); //se define el campo para los nombres del administrador
            $table->string('apellidosAdministrador', 20); //se define el campo para los apellidos del administrador
            $table->char('telefono',9);        //Se define el campo para el telefono
            $table->char('contraseña',20); //Se define el campo para la contraseña 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administradors');
    }
};
