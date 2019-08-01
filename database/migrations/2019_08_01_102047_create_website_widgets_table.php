<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsiteWidgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_widgets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->text('action_type')->nullable();
            $table->text('schedule')->nullable();
            $table->text('details')->nullable();
            $table->text('contents')->nullable();
            $table->text('call_us')->nullable();
            $table->string('payment')->nullable();
            $table->text('invitation_lebel')->nullable();
            $table->text('invitation_title')->nullable();
            $table->text('invitation_text')->nullable();
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
        Schema::dropIfExists('website_widgets');
    }
}
