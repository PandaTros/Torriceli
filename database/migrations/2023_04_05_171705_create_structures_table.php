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
        Schema::create('structures', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nombres');
            $table->string('clave');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('municipios');
            $table->string('secciones_asignadas');
            $table->string('secciones');
            $table->string('avance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('structures');
    }
};
