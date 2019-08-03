<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('business_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('calendar_setting_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('fee')->nullable();
            $table->text('description')->nullable();
            $table->integer('duration_hours')->nullable();
            $table->integer('duration_minutes')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('services');
    }
}
