<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->smallInteger('type');//1 means plan_id is required, 2 means they bought conversations
            $table->foreign('user_id')->references('id')->on('users')->onDelete('NO ACTION');
            $table->integer('plan_id')->unsigned()->nullable();
            $table->foreign('plan_id')->references('id')->on('users')->onDelete('NO ACTION');
            $table->decimal('payment');
            $table->decimal('payment_type'); //whether it was a coupon or money
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
        Schema::dropIfExists('sales');
    }
}
