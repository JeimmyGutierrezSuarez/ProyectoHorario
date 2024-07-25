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
            $table->id(); //Id ambiente
            $table->string('nomAmbiente'); //nombre del ambiente
            $table->string('idTipAmbiente'); //id del tipo de ambientte el cual le pertenece
            $table->string('idSede'); //id sede esta es una llave foranea de la tabla sede
            $table->string('idEstado'); //Id estado esta es una llave foranea que esta en la tabla estado
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

