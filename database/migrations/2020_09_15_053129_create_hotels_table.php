<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('location_id');
            $table->string('hotel_name');
            $table->integer('room_numbers');
            $table->integer('available_room');
            $table->float('minimum_price');
            $table->string('hotel_facilities');
            $table->text('address');
            $table->text('description');
            $table->text('hotel_image');
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
        Schema::dropIfExists('hotels');
    }
}
