<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('location_id');
            $table->integer('hotel_id');
            $table->string('room_name');
            $table->string('room_code');
            $table->Integer('number_of_room');
            $table->Integer('available_room');
            $table->string('room_type');
            $table->integer('room_capacity');
            $table->string('room_facilities');
            $table->float('price_per_night');
            $table->text('description');
            $table->text('room_image');
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
        Schema::dropIfExists('rooms');
    }
}
