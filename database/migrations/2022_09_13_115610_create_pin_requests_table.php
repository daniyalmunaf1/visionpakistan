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
        Schema::create('pin_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('company_acc_number');
            $table->string('sender_acc_number');
            $table->string('trx_id');
            $table->integer('number_of_pins');
            $table->string('plan');
            $table->string('status');
            $table->bigInteger('amount');
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
        Schema::dropIfExists('pin_requests');
    }
};
