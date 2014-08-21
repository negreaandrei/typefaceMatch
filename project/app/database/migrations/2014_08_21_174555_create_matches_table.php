<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matches', function(Blueprint $table)
        {
            $table->increments('id');
            $table->text('svgCode');
            $table->string('firstFontName');
            $table->string('firstFontLink');
            $table->string('secondFontName');
            $table->string('secondFontLink');
            $table->unsignedBigInteger('numberOfViews');
            $table->unsignedBigInteger('perfectScore');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('matches');
	}

}
