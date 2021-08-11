<?php

use App\Models\Propuestas;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propuestas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo')->unique()->min(10)->max(255);
            $table->string('descripcion')->min(40);
            $table->enum('estado', array('ACT', 'ASG'));
            $table->unsignedBigInteger('linea_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('linea_id')->references('id')->on('lineas');
            $table->foreign('user_id')->references('id')->on('users');
           
        });
      
     
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propuestas');
    }
}
