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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();                                                       
            $table->string('cliente_codigo');
            /* $table->index('cliente_codigo');*/
            /* $table->foreign('cliente_codigo')->references('id')->on('Cliente');  */
            $table->string('coche_matricula',10);
            /* $table->index('coche_matricula'); */
            $table->foreign('coche_matricula')->references('matricula')->on('Coche'); 
            $table->string('usuario_id');
            /* $table->index('usuario_id');*/
            /* $table->foreign('usuario_id')->references('id')->on('Usuario'); */
            $table->decimal('total',9,2);                                         
            $table->string('status');                                          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
