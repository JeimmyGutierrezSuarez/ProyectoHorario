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
        Schema::create('diseno_curriculars', function (Blueprint $table) {
            $table->id();
            $table->string('denPrograma',100); //Columna que almacena la Denomainacion del programa
            $table->string('codPrograma',8); //Columna que almacena la Codigo del programa
            $table->string('verPrograma',10); //Columna que almacena la Version del programa
            $table->date('fecInicio'); //Columna que almacena la fecha de inicio del programa
            $table->date('fecFin'); //Columna que almacena la fechja final del programa
            $table->integer('durElectiva');// Columna que almacena la duracion del programa
            $table->integer('durProductiva'); //Columna que almacena la duracion del programa en productiva
            $table->string('tipPrograma',15); //Columna que almacena el tipo de programa (titulada o otra)
            $table->string('cerPrograma'); //Columna que almacena el certificado del programa (tecnico o tecnologo)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diseno_curriculars');
    }
};
