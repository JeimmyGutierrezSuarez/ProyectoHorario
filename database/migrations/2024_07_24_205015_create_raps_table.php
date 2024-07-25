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
        Schema::create('raps', function (Blueprint $table) {
            $table->id('idRap');
            $table->string('descripcion'); //Columna que almacena la descripcion de el rap 
            $table->string('idCompetencia'); //Columna que almacena el id de la competencia este es llave foranea que viene de la tabla competencia 
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('raps');
    }
};
