<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearningActionArchiveThematicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_action_thematics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('learning_action_archive_id')->unsigned();
            $table->bigInteger('thematic_id')->unsigned();
            $table->string('status', 50)->default('A');
            $table->timestamps();
            $table->foreign('learning_action_archive_id')->references('id')->on('learning_action_archive');
            $table->foreign('thematic_id')->references('id')->on('thematics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learning_action_thematics');
    }
}
