<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Lineas;
class CreateLineasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('description')->unique()->min(40);
        });

         
         $lineas = new Lineas;
         $lineas->name = 'Algoritmos de complejidad';
         $lineas->description = 'Investigaciones sobre el diseño, la implementacíon y el análisis de distintos tipos de algoritmos.';
         $lineas->save();
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lineas');
    }
}
