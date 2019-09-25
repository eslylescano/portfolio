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
            'name' => 'Freelance',
            'title' => 'Web Developer',
            'from_date' => '03-2018',
            'to_date' => 'Currently',
            'description' => '')); 

        DB::table('experiences')->insert(
        array(
            'user_id' => '1',
            'type' => '1',
            'name' => 'Freelance',
            'title' => 'Android Developer',
            'from_date' => '06-2015',
            'to_date' => 'Currently',
            'description' => ''));    

        DB::table('experiences')->insert(
        array(
            'user_id' => '1',
            'type' => '2',
            'name' => 'Android Course',
            'title' => 'Medium Android',
            'from_date' => '01-2015',
            'to_date' => '05-2015',
            'description' => '')); 

        DB::table('experiences')->insert(
        array(
            'user_id' => '1',
            'type' => '2',
            'name' => 'Mobile Development Course',
            'title' => 'Android IOS Developer',
            'from_date' => '01-2013',
            'to_date' => '06-2013',
            'description' => ''));

        DB::table('experiences')->insert(
        array(
            'user_id' => '1',
            'type' => '2',
            'name' => 'Web Development ASP.NET MVC',
            'title' => 'ASP.NET Developer',
            'from_date' => '01-2014',
            'to_date' => '06-2014',
            'description' => ''));

        DB::table('experiences')->insert(
        array(
            'user_id' => '1',
            'type' => '2',
            'name' => 'Web Development Laravel',
            'title' => 'Web Developer',
            'from_date' => '01-2017',
            'to_date' => '06-2017',
            'description' => ''));
        DB::table('experiences')->insert(
        array(
            'user_id' => '1',
            'type' => '2',
            'name' => 'Software Engineering',
            'title' => 'Medium IOS',
            'from_date' => '09-2014',
            'to_date' => 'Currently',
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
