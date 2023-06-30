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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('marca')->nullable();
            $table->string('titulo')->nullable();
            $table->integer('stock')->nullable();
            $table->unsignedBigInteger('id_estado')->nullable();
            $table->foreign('id_estado')->on('estados')->references('id');
            $table->boolean('activo')->nullable();
            $table->string('codigo')->nullable();
            $table->double('precio', 10, 2)->nullable();
            $table->double('ganancia')->nullable();
            $table->string('ubicacion')->nullable();
            $table->string('tamaño_o_tipo')->nullable();
            $table->string('fecha_de_expiracion')->nullable();
            $table->string('tipo_de_meditas')->nullable();
            $table->unsignedBigInteger('id_categoria')->nullable();
            $table->foreign('id_categoria')->on('categorias')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
