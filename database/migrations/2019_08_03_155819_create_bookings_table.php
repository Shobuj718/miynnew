<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->nulllable();
            $table->integer('category_id')->unsigned()->nulllable();
            $table->integer('service_id')->unsigned()->nulllable();
            $table->integer('staff_id')->unsigned()->nulllable();
            $table->integer('client_id')->unsigned()->nulllable();
            $table->string('service_name')->nulllable();
            $table->string('staff_name')->nulllable();
            $table->string('first_name')->nulllable();
            $table->string('last_name')->nulllable();
            $table->string('phone')->nulllable();
            $table->string('email')->nulllable();
            $table->string('subject')->nulllable();
            $table->text('requested_date')->nulllable();
            $table->integer('confirmed')->default(0);
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
        Schema::dropIfExists('bookings');
    }
}
