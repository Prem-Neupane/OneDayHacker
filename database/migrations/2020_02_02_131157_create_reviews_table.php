<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('review');
            $table->string('rate');
            $table->integer('guide_id')->unsigned()->nullable();
            $table->foreign('guid_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('tourist_id')->unsigned()->nullable();
            $table->foreign('guid_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('place_id')->unsigned()->nullable();
            $table->foreign('place_id')->references('id')->on('places')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('reviews');
    }
}
