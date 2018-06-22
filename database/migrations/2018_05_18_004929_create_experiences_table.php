<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('type');
            $table->string('name');
            $table->string('title');
            $table->string('from_date');
            $table->string('to_date');
            $table->string('description');
            $table->timestamps();
        });

        DB::table('experiences')->insert(
        array(
            'user_id' => '1',
            'type' => '1',
            'name' => 'Empresa A',
            'title' => 'Cargo A',
            'from_date' => '2015-02-02',
            'to_date' => '2015-05-02',
            'description' => '')); 

        DB::table('experiences')->insert(
        array(
            'user_id' => '1',
            'type' => '1',
            'name' => 'Empresa B',
            'title' => 'Cargo B',
            'from_date' => '2015-02-02',
            'to_date' => '2015-05-02',
            'description' => ''));    

        DB::table('experiences')->insert(
        array(
            'user_id' => '1',
            'type' => '2',
            'name' => 'Empresa A',
            'title' => 'Centro A',
            'from_date' => '2015-02-02',
            'to_date' => '2015-05-02',
            'description' => '')); 

        DB::table('experiences')->insert(
        array(
            'user_id' => '1',
            'type' => '2',
            'name' => 'Empresa B',
            'title' => 'Centro B',
            'from_date' => '2015-02-02',
            'to_date' => '2015-05-02',
            'description' => ''));                 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiences');
    }
}
