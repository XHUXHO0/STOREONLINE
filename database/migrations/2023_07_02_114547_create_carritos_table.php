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
        Schema::create('carritos', function (Blueprint $table) {
            $table->id();
            $table->integer('items');
            $table->double('monto');
            $table->unsignedBigInteger('id_producto')->nullable();
            $table->foreign('id_producto')->on('productos')->references('id');
            $table->bigInteger('id_usuario')->unsigned()->nullable();
            $table->foreign('id_usuario')->references('id')->on('users')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carritos');
    }
};
