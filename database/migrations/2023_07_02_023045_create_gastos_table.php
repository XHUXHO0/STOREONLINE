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
        Schema::create('gastos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable();
            $table->double('monto')->nullable();
            $table->string('descripcion')->nullable();
            $table->unsignedBigInteger('id_sucursal')->nullable();
            $table->foreign('id_sucursal')->on('sucursals')->references('id');
            $table->bigInteger('id_vendedor')->unsigned()->nullable();
            $table->foreign('id_vendedor')->references('id')->on('users')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos');
    }
};
