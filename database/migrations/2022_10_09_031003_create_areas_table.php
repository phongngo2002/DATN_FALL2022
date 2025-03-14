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
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->longText('link_gg_map')->default('');
            $table->integer('user_id');
            $table->integer('status')->default(1);
            $table->string('img')->default('https://res.cloudinary.com/dvm5todet/image/upload/v1667573672/DATN_FALL2022/x4yhpvxmdh2r9vly1og9.jpg');
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
        Schema::dropIfExists('areas');
    }
};
