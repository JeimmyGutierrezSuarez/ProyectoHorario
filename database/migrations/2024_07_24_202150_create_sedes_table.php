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
            $table->id('idSede');//Id de la sede
            $table->string('nombre',30); //Columna que almacena el nombre de la sede 
            $table->string('ubicacion',40); //Columna que almacena la ubicacion de la sede, uan descricpcion de donde queda
            $table->string('idEstado',10); //Columna que almacena el id del estado de la sede - llave foranea de la tabla estado 
            //Definicion de llaves foraneas
            $table->unsignedBigInteger('idEstado')->references('estados')->on('id')->onDelete('cascade');
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
