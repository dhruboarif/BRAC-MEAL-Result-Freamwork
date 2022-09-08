<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearningActionArchiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_action_archive', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type', 50)->nullable()->default('INDIVIDUAL');
            $table->bigInteger('program_id')->unsigned()->index()->nullable();
            $table->bigInteger('support_id')->unsigned()->index()->nullable();
            $table->string('name')->nullable();
            $table->string('year', 100)->nullable();
            $table->string('remarks')->nullable();
            $table->integer('version')->default(1);
            $table->bigInteger('version_ref_id')->unsigned()->nullable();
            $table->string('status', 50)->default('A');
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->bigInteger('approved_user_id')->unsigned()->nullable();
            $table->dateTime('approved_at')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('approved_user_id')->references('id')->on('users');
            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('support_id')->references('id')->on('supports');
            $table->foreign('version_ref_id')->references('id')->on('study_archive');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learning_action_archive');
    }
}
