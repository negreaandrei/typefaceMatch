<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMatchesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_matches', function(Blueprint $table)
        {
            $table->unsignedInteger('userId');
            $table->unsignedInteger('matchId');
            $table->boolean('creator');
            $table->boolean('matchBox');

            $table->primary(array('userId', 'matchId'));
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('matchId')->references('id')->on('matches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('match_annotations');
    }

}
