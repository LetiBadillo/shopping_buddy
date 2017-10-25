<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersSizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_size', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('shoulders')->nullable();
            $table->decimal('chest')->nullable();
            $table->decimal('waist')->nullable();
            $table->decimal('hips')->nullable();
            $table->decimal('height')->nullable();
            $table->string('shirt_size', 5)->nullable();
            $table->integer('jeans_size')->nullable();
            $table->decimal('shoes_size')->nullable();
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
        Schema::dropIfExists('users_size');
    }
}
