<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSpacifiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_spacifies', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_name');
            $table->string('model');
            $table->string('class_of_vehical')->default('Motorcycle');
            $table->string('prev_reg')->default('New');
            $table->string('type_of_body');
            $table->string('maker_name')->default('Bangladesh Honda Private Ltd');
            $table->string('maker_country')->default('Bangladesh');
            $table->string('year_of_manufacture');
            $table->string('number_Of_cylinders');
            $table->string('fuel');
            $table->string('horse_power');
            $table->string('rpm');
            $table->string('cabin_capacity');
            $table->string('number_Of_standee');
            $table->string('wheel_base');
            $table->string('unloaded_weight');
            $table->string('max_load_train_weight');
            $table->string('frame_name');
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
        Schema::dropIfExists('product_spacifies');
    }
}
