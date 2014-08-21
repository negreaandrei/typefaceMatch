<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('match_tags', function(Blueprint $table)
        {
            $table->unsignedInteger('matchId');
            $table->unsignedInteger('tagId');

            $table->primary(array('matchId', 'tagId'));
            $table->foreign('matchId')->references('id')->on('matches');
            $table->foreign('tagId')->references('id')->on('tags');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('match_tags');
	}

}
