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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
           $table->string('nome');
           $table->text('Descrição');
           $table->timestamp('Data de aquisição')->nullable();
           $table->double('Valor',10, 2);
           $table->string('Localização');
           $table->string('imagem')->nullable();
           $table->unsignedBigInteger('id_user');
           $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

           $table->unsignedBigInteger('id_categorias');
           $table->foreign('id_categorias')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
