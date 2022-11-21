<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('cantidad_disponible');
            $table->date('fecha_edicion')->nullable();
            $table->string('formato')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('imagen_pdf')->nullable();
            $table->string('observaciones');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->unsignedBigInteger('autor_id');
            $table->foreign('autor_id')->references('id')->on('autors')->onDelete('cascade');
            $table->unsignedBigInteger('editorial_id');
            $table->foreign('editorial_id')->references('id')->on('editorials')->onDelete('cascade');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
};
