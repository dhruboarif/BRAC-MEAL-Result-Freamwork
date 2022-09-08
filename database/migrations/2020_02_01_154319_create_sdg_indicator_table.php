<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSdgIndicatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdg_indicators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('indicator_name');
            $table->string('sdg_target');
            $table->bigInteger('goal_id')->unsigned()->index()->nullable();
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->string('status', 50)->default('A');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('goal_id')->references('id')->on('sdg_goals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sdg_indicators');
    }
}
