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
        Schema::create('sedes', function (Blueprint $table) {
            $table->id();//Id de la sede
            $table->string('nombre',30); //Nombre de la sede 
            $table->string('ubicacion',40); //Ubicacion de la sede, uan descricpcion de donde queda
            $table->string('idEstado',10); //Id del estado de la sede, esta es uan llave foranea de la tabla estado 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sedes');
    }
};
