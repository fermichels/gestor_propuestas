<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicituds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion')->min(20)->max(255);
            $table->timestamps();
            $table->unsignedBigInteger('propuesta_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('user_id_2')->nullable();
            $table->integer('tutor_id');

            $table->foreign('propuesta_id')->references('id')->on('propuestas');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_id_2')->references('id')->on('users');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicituds');
    }
}
