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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('number');
            $table->string('accountname');
            $table->bigInteger('current_income')->nullable();
            $table->bigInteger('reward_income')->nullable();
            $table->bigInteger('total_income')->nullable();
            $table->bigInteger('level')->nullable();
            $table->bigInteger('score')->nullable();
            $table->bigInteger('target')->nullable();
            $table->bigInteger('team_bonus')->nullable();
            $table->string('bankname');
            $table->string('email')->unique();
            $table->string('ref_email')->nullable();
            $table->integer('pin')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->dateTime('lastuseradded');
            $table->integer('deactivate');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
