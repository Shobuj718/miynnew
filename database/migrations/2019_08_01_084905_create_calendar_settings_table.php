<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('business_id')->unsigned()->nullable();
            $table->integer('week_start')->nullable();
            $table->string('weekly_off')->nullable();
            $table->integer('increment_hour')->nullable();
            $table->integer('increment_minute')->nullable();
            $table->string('timezone')->nullable();
            $table->string('business_hour_start')->nullable();
            $table->string('business_hour_end')->nullable();
            $table->string('local_time')->nullable();
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
        Schema::dropIfExists('calendar_settings');
    }
}
