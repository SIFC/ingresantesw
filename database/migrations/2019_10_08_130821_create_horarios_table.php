<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fechaTaller');
            $table->smallInteger('dia');
            $table->dateTime('horaInicio');
            $table->dateTime('horaFin');
            $table->bigInteger('taller_id')->unsigned();
            $table->foreign('taller_id')->references('id')->on('tallers')->onDelete('cascade');
            $table->string('aula')->nullable();
            $table->string('ubicacion')->nullable();
            $table->integer('grupo');
            $table->string('codigo_qr')->nullable();
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
        Schema::dropIfExists('horarios');
    }
}
