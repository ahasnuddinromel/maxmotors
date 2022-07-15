<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emplyee_name');
            $table->string('emplyee_degi');
            $table->string('emplyee_fathers_name');
            $table->string('emplyee_mothers_name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('emplyee_pr_address')->nullable();
            $table->string('emplyee_permanent_address')->nullable();
            $table->unsignedInteger('nid_no')->nullable();
            $table->string('emplyee_photo')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('employees');
    }
}
