<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finances', function (Blueprint $table) {
            $table->id();
            $table->string('cash_in_hand')->nullable();
            $table->string('bank_diposit')->nullable();
            $table->string('loan_bank')->nullable();
            $table->string('loan_others')->nullable();
            $table->string('cradit_investment')->nullable();
            $table->string('bad_dabit')->nullable();
            $table->string('showroon_advance')->nullable();
            $table->string('decoration_invest')->nullable();
            $table->string('permanent_assets')->nullable();
            $table->string('others_invest')->nullable();
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
        Schema::dropIfExists('finances');
    }
}
