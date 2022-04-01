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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreign('wedding_ocation_id')->references('id')->on('wedding_ocations')->onDelete('cascade');
            $table->string('name');
            $table->string('family');
            $table->string('telephone');
            $table->string('address');
            $table->string('location');
            $table->unsignedInteger('a4');
            $table->unsignedInteger('a3');
            $table->unsignedInteger('file');
            $table->boolean('post');
            $table->unsignedInteger('pay');
            $table->unsignedInteger('type_pay');
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
        Schema::dropIfExists('customers');
    }
};
