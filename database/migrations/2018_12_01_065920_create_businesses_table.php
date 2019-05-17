<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBusinessesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('businesses', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('user_id')->unsigned();
			$table->integer('industry_id')->unsigned();
			$table->integer('profession_id')->unsigned();
			$table->string('secret_key')->nullable();
			$table->string('name');
			$table->string('logo')->nullable();
			$table->text('short_description', 65535);
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
		Schema::drop('businesses');
	}

}
