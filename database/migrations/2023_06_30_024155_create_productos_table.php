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
            $table->unsignedBigInteger('id_empresa')->nullable();
            $table->unsignedBigInteger('id_sucursal')->nullable();
            $table->bigInteger('id_usuario')->unsigned()->nullable();
            $table->unsignedBigInteger('id_categoria')->nullable();
            $table->string('uri_foto')->nullable();
            $table->string('marca')->nullable();
            $table->string('titulo')->nullable();
            $table->integer('stock')->nullable();
            $table->unsignedBigInteger('id_estado')->nullable();
            $table->boolean('activo')->nullable();
            $table->string('codigo')->nullable();
            $table->double('precio', 10, 2)->nullable();
            $table->double('ganancia')->nullable();
            $table->string('ubicacion')->nullable();
            $table->string('tamano_o_tipo')->nullable();
            $table->string('fecha_de_expiracion')->nullable();
            $table->string('tipo_de_meditas')->nullable();
            $table->timestamps();
            $table->foreign('id_empresa')->on('empresas')->references('id');
            $table->foreign('id_sucursal')->on('sucursals')->references('id');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_categoria')->on('categorias')->references('id');
            $table->foreign('id_estado')->on('estados')->references('id');
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
