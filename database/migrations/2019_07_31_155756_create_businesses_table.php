<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('industry_id')->unsigned();
            $table->integer('profession_id')->unsigned();
            $table->string('secret_key')->nullable();
            $table->string('name')->nullable();
            $table->string('short_description')->nullable();
            $table->string('logo')->nullable();
            $table->string('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
}
