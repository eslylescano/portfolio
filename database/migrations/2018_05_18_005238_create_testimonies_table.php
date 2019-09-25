<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimoniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('state');
            $table->string('ip');
            $table->string('name');
            $table->string('comment');
            $table->string('date');
            $table->timestamps();
        });


/*
        DB::table('testimonies')->insert(
        array(
            'user_id' => '1',
            'state' => '2',
            'ip' => '192.168.1.5',
            'name' => 'Juan Paredes',
            'comment' => 'Excelente profesional, definitivamente es una gran persona y muy empeñoso en su trabajo.',
            'date' => '2015-02-02'));

        DB::table('testimonies')->insert(
        array(
            'user_id' => '1',
            'state' => '1',
            'ip' => '192.168.1.5',
            'name' => 'Jose Andrade',
            'comment' => 'Eduardo es una persona muy profesional, se nota que sabe del tema y estoy muy contento con los cursos que ha realizado.',
            'date' => '2015-02-02'));
    
         DB::table('testimonies')->insert(
        array(
            'user_id' => '1',
            'state' => '3',
            'ip' => '192.168.1.5',
            'name' => 'Bravo Maloi',
            'comment' => 'Curso de $&/$&#!$!"#$%#&@@ ....',
            'date' => '2015-02-02')); */  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimonies');
    }
}
