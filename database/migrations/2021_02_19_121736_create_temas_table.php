<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('propuesta_id')->unique();
            $table->unsignedBigInteger('user_id')->unique();
            $table->unsignedBigInteger('user_id_2')->unique()->nullable();
            
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
        Schema::dropIfExists('temas');
    }
}
