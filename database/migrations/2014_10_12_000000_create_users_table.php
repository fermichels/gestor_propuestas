<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('tipo', array('TUTO', 'ALUM', 'ROOT'));
            $table->rememberToken();
            $table->timestamps();
        });

        // Crea super user
        $user = new User;
        $user->name = 'root';
        $user->email = 'root@mail.com';
        $user->username = 'root';
        $user->password = Hash::make('root');
        $user->tipo = 'ROOT';
        $user->save();

         // Crea tutor
         $user2 = new User;
         $user2->name = 'tutor';
         $user2->email = 'tutor@mail.com';
         $user2->username = 'tutor';
         $user2->password = Hash::make('tutor');
         $user2->tipo = 'TUTO';
         $user2->save();


          // Crea alumno
        $user3 = new User;
        $user3->name = 'alum';
        $user3->email = 'alum@mail.com';
        $user3->username = 'alum';
        $user3->password = Hash::make('alum');
        $user3->tipo = 'ALUM';
        $user3->save();

// Crea alumno
        $user4 = new User;
        $user4->name = 'alum1';
        $user4->email = 'alum1@mail.com';
        $user4->username = 'alum1';
        $user4->password = Hash::make('alum1');
        $user4->tipo = 'ALUM';
        $user4->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}