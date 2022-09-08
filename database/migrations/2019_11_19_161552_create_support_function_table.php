<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportFunctionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->string('status', 50)->default('A');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supports');
    }
}
