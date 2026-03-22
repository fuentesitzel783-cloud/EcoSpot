<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('centros_reciclaje', function (Blueprint $table) {
        $table->id('id_Centro');
        $table->string('nombre',100);
        $table->string('direccion',400);
        $table->string('horarios',200);
        $table->string('contactos',200);
        
        $table->boolean('paga')->nullable();
        $table->boolean('plastico')->nullable();
        $table->boolean('papelCarton')->nullable();
        $table->boolean('vidrio')->nullable();
        $table->boolean('metales')->nullable();
        $table->boolean('electronicos')->nullable();
        $table->boolean('telas')->nullable();

        $table->boolean('recicladora')->nullable();
        $table->boolean('centroAcopio')->nullable();
        $table->boolean('chatarreria')->nullable();
        $table->string('imagen')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centros_reciclaje');
    }
};
