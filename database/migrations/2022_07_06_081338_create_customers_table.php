<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
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
            $table -> string('customer_name');
            $table -> string('customer_fathers_name');
            $table -> string('customer_mothers_name');
            $table -> string('customer_opt_name')->nullable();
            $table -> string('customer_guardins_name')->nullable();
            $table -> string('phone_number');
            $table -> string('email')->nullable();
            $table -> string('customer_pr_address')->nullable();
            $table -> string('customer_permanent_address')->nullable();
            $table -> string('customer_nationality')->default('Bangladeshi');
            $table -> string('customer_nid_no');
            $table -> string('customer_tin_no')->nullable();
            $table -> string('model');
            $table -> string('color');
            $table -> string('engine_no');
            $table -> string('chassis_no');
            $table -> string('customer_dl_no')->nullable();
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
}
