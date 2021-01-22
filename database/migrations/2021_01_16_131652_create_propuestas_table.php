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
            $table->string('titulo')->unique();
            $table->string('descripcion');
            $table->enum('estado', array('ACT', 'ASG'));
            $table->unsignedBigInteger('linea_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('linea_id')->references('id')->on('lineas');
            $table->foreign('user_id')->references('id')->on('users');
    
        });
      
      $propuesta = new Propuestas;
      $propuesta->titulo = 'titulotest';
      $propuesta->descripcion = 'root@mail.com';
      $propuesta->estado = 'ACT';
      $propuesta->linea_id = '1';
      $propuesta->user_id = '1';
      $propuesta->save();

 
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
