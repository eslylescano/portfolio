<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('surname');//new field
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address');//new field

            $table->string('phone');//new field
            $table->string('facebook');//new field
            $table->string('twitter');//new field
            $table->string('youtube');//new field
            $table->string('city');//new field
            /*
            $table->string('country_id');//new field
            $table->string('photo');//new field*/
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
