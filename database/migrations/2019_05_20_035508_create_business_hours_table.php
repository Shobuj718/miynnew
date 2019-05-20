<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_hours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->integer('user_id')->unsigned();

            $table->string('sun_business_hours_am')->nullable();
            $table->string('sun_business_hours_pm')->nullable();

            $table->string('mon_business_hours_am')->nullable();
            $table->string('mon_business_hours_pm')->nullable();

            $table->string('tue_business_hours_am')->nullable();
            $table->string('tue_business_hours_pm')->nullable();

            $table->string('wed_business_hours_am')->nullable();
            $table->string('wed_business_hours_pm')->nullable();

            $table->string('thu_business_hours_am')->nullable();
            $table->string('thu_business_hours_pm')->nullable();

            $table->string('fri_business_hours_am')->nullable();
            $table->string('fri_business_hours_pm')->nullable();

            $table->string('sat_business_hours_am')->nullable();
            $table->string('sat_business_hours_pm')->nullable();

            $table->integer('status')->default(1);
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
        Schema::dropIfExists('business_hours');
    }
}
