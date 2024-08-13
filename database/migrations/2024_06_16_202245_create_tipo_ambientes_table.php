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
        Schema::create('tipo_ambientes', function (Blueprint $table) {
            $table->id('idTipoAmbiente'); //Columna que almacena el Id tipo de ambiente
            $table->string('descripcion',200); //Columna que almacena la descripcion de el Tipo ambiente() 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_ambientes');
    }
};
