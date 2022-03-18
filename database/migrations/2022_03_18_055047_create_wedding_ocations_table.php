<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wedding_ocations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('wedding_date_id');
            $table->unsignedInteger('wedding_hall_id');
            $table->foreign('wedding_date_id')->references('id')->on('wedding_dates')->onDelete('cascade');
            $table->foreign('wedding_hall_id')->references('id')->on('wedding_halls')->onDelete('cascade');
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
        Schema::dropIfExists('wedding_ocations');
    }
};
