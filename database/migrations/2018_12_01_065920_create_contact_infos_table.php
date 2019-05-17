<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contact_infos', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('user_id')->unsigned();
			$table->string('phone');
			$table->text('address', 65535)->nullable();
			$table->string('website_url')->nullable();
			$table->boolean('display_phone')->nullable()->default(0);
			$table->boolean('display_address')->nullable()->default(0);
			$table->boolean('display_website_url')->nullable()->default(0);
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
		Schema::drop('contact_infos');
	}

}
