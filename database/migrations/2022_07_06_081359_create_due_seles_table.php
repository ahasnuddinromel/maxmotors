<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDueSelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('due_seles', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id');
            $table->string('guarantor_name');
            $table->string('guarantor_fathers_name');
            $table->string('phone_number');
            $table->string('guarantor_nid_no');
            $table->string('cheque_no');
            $table->longText('bank_details');
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
        Schema::dropIfExists('due_seles');
    }
}
