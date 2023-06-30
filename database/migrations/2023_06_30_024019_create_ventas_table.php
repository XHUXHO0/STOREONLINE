<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_vendedor')->unsigned()->nullable();
            $table->foreign('id_vendedor')->references('id')->on('users')->onUpdate('cascade');
            $table->double('monto')->nullable();
            $table->double('ganancia')->nullable();
            $table->integer('items')->nullable();
            $table->bigInteger('id_estatus_venta')->unsigned()->nullable();
            $table->foreign('id_estatus_venta')->references('id')->on('estado_ventas')->onUpdate('cascade');
            $table->string('codigo_referencia')->nullable();
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
