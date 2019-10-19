<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTallersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tallers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('qr');
            $table->string('titulo');
            $table->string('contexto');
            $table->string('objetivo');
            $table->string('contenidos');
            $table->string('metodologia');
            $table->string('duracion');
            $table->string('aula');
            $table->string('ubicacion');
            // $table->bigInteger('tienda_id')->unsigned();
            // $table->foreign('tienda_id')->references('id')->on('tiendas')->onDelete('cascade');
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
        Schema::dropIfExists('tallers');
    }
}
