<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_history', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('NO ACTION');
            $table->integer('plan_id')->unsigned();
            $table->foreign('plan_id')->references('id')->on('users')->onDelete('NO ACTION');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->integer('conversations_available');
            $table->integer('plan_duration_number')->nullable();
            $table->integer('conversations_count')->default('0');
            $table->integer('renewals')->nullable();
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
        Schema::dropIfExists('users_history');
    }
}
