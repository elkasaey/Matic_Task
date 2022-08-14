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
        Schema::create('car_maintainances', function (Blueprint $table) {
            $table->id();
            $table->integer('car_id')->unsigned();
            $table->integer('maintainance_type_id')->unsigned();
            $table->dateTime('maintainance_date', $precision = 0);
            $table->foreign('car_id')->references('id')->on('owened_cars')->onDelete('cascade');
            $table->foreign('maintainance_type_id')->references('id')->on('maintenance_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_maintainances');
    }
};
