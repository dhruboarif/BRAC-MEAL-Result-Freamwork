<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudyArchivesThematicAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_thematics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('study_archive_id')->unsigned();
            $table->bigInteger('thematic_id')->unsigned();
            $table->string('status', 50)->default('A');
            $table->timestamps();
            $table->foreign('study_archive_id')->references('id')->on('study_archive');
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
        Schema::dropIfExists('study_thematics');
    }
}
