<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudyArchiveFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_archive_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('study_archive_id')->unsigned();
            $table->bigInteger('store_by')->unsigned()->index();
            $table->bigInteger('update_by')->unsigned()->index()->nullable();
            $table->string('status', 50)->default('A');
            $table->string('remarks')->nullable();
            $table->string('name');
            $table->string('path');
            $table->integer('version')->default(1);
            $table->timestamps();
            $table->foreign('store_by')->references('id')->on('users');
            $table->foreign('update_by')->references('id')->on('users');
            $table->foreign('study_archive_id')->references('id')->on('study_archive');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('study_archive_files');
    }
}
