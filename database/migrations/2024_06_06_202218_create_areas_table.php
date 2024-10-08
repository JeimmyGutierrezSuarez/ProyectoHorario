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
        Schema::create('areas', function (Blueprint $table) {
            $table->id('idArea');
            $table->string('descripcion',40);
            $table->unsignedBigInteger('idRed');
            $table->timestamps();

            //se declara llave foraneas
            $table->foreign('idRed')->references('idRed')->on('reds');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areas');
    }
};
