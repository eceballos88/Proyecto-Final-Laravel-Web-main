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
        Schema::create('reparacionmecanicos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('idMecanicoFk');
            $table->foreign('idMecanicoFk')->references('id')->on('mecanicos');
            $table->string('matriculaFK')->references('coches')->on('matricula');
            $table->integer('TiempoEmpleado');
            $table->enum('estatus', ['Activo','Inactivo','Pendiente']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reparacionmecanicos');
    }
};
