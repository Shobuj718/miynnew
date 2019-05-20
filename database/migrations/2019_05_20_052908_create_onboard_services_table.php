<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnboardServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onboard_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->integer('user_id')->unsigned();

            $table->string('service_name')->nullable();
            $table->string('service_duration')->nullable();
            $table->integer('service_price')->default(0);

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
        Schema::dropIfExists('onboard_services');
    }
}
