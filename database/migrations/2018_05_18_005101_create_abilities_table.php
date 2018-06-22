<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abilities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->integer('domain');
            $table->timestamps();
        });

        DB::table('abilities')->insert(
        array(
            'user_id' => '1',
            'name' => 'PHP',
            'domain' => '60'));

        DB::table('abilities')->insert(
        array(
            'user_id' => '1',
            'name' => 'ASP.NET MVC',
            'domain' => '80'));            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abilities');
    }
}
