<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motels', function (Blueprint $table) {
            $table->id();
            $table->string('room_number');
            $table->float('price', 11, 3);
            $table->float('area', 11, 3);
            $table->integer('area_id');
            $table->longText('description');
            $table->text('image_360');
            $table->text('photo_gallery');
            $table->longText('services');
            $table->integer('status')->default('0');
            $table->integer('max_people');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('category_id');
            $table->softDeletes();
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
        Schema::dropIfExists('motels');
    }
};
