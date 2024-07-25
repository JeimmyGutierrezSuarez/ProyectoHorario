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
        Schema::create('perfil_instructors', function (Blueprint $table) {
            $table->id('idPerInstructor'); //Columna que almacena el id del perfil de cada instructor que aparece en el diseñ0o cuuricular
            $table->string('reqAcademicos'); //Columna que almacena los requisitos academicos del instructor que paarce en el eperfil 
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfil_instructors');
    }
};
