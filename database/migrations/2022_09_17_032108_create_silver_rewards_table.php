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
        Schema::create('silver_rewards', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('level')->nullable();
            $table->bigInteger('score')->nullable();
            $table->bigInteger('reward')->nullable();
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
        Schema::dropIfExists('silver_rewards');
    }
};
