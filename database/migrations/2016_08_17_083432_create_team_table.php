<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function(Blueprint $table)
    {
        $table->increments('id');
        $table->string('team_name');
        $table->string('team_captain_name');
        $table->string('team_logo');
        $table->integer('create_time');
        $table->integer('team_status');
        $table->integer('team_number');
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
        //
    }
}
