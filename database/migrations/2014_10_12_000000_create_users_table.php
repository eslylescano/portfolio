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
            $table->string('surname')->nullable();//new field
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address')->nullable();//new field

            $table->string('phone')->nullable();//new field
            $table->string('facebook')->nullable();//new field
            $table->string('twitter')->nullable();//new field
            $table->string('youtube')->nullable();//new field
            $table->string('city')->nullable();//new field
            $table->integer('country_id')->nullable();//new field
            $table->string('photo')->nullable();//new field
            $table->rememberToken();
            $table->timestamps();
            
        });

        DB::table('users')->insert(
        array(
            'name' => 'Esly',
            'surname' => 'Lescano',
            'email' => 'eslylescano@gmail.com',
            'password' => '$2y$10$HVujfEBBVS9pPO2yeXVJYu3pcZMLe8JFRmu2wMGsmvV6aQYrp7Clu',
            'address' => '11 Crag View Staveley',
            'phone' => '07463360235',
            'facebook' => '',
            'twitter' => '',
            'youtube' => '',
            'city' => 'Kendal',
            'country_id' => '227',
            'photo' => 'esly.jpg'));
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
