<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchAnnotationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_annotations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('matchId');
            $table->string('content');
            $table->string('frame');

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
